<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class GestionController extends Controller
{
    public function index(){
        return view('gestion.index');
    }

    public function getList(){
        $query = DB::connection('sqlsrv')->table('CasoUniversalWeb')->where('Referencia', '<>', 'MANTENIMIENTO');
        return Datatables::of($query)
            ->editColumn('Numero_Caso', function($CasoUniversalWeb){
                return "<a href='/admin/gestion/detalle/".$CasoUniversalWeb->Numero_Caso."'>$CasoUniversalWeb->Numero_Caso</a>";
            })
            ->addColumn('action', "gestion.action")
            ->rawColumns(['action' => 'action', 'Numero_Caso' => 'Numero_Caso'])
            ->make(true);       
    }

    public function caseNumber($caseNumber){
        $items = DB::connection('sqlsrv')->table('CasoUniversalWeb')->where('Numero_Caso', $caseNumber)->first();
        return view('gestion.show', compact('items'));
    }
    /*
    public function findCase(Request $request){
        $items = DB::connection('sqlsrv')->table('CasoUniversalWeb')->where('Numero_Caso', $request->numero_caso)->first();

        return response()->json([
            'viewListGestion' => View::make('gestion.lista-async', compact('items'))->render(),
        ]);
    }
    */
}
