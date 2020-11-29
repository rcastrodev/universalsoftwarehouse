<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Yajra\Datatables\Datatables;
use App\CasosWeb;

class BitacoraController extends Controller
{
    public function index(){
        return view('bitacora.index');
    }

    public function getList(){
    $query = CasosWeb::where('Referencia', 'MANTENIMIENTO');
        return Datatables::of($query)
            ->editColumn('Numero_Caso', function($CasoUniversalWeb){
                return "<a href='/admin/bitacora/detalle/".$CasoUniversalWeb->Numero_Caso."'>$CasoUniversalWeb->Numero_Caso</a>";
            })
            ->rawColumns(['Numero_Caso'])
            ->make(true);       
    }

    public function caseNumber($caseNumber){
        $items = CasosWeb::where('Numero_Caso', $caseNumber)->first();
        return view('bitacora.show', compact('items'));
    }

}
