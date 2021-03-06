<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Bitacora;
use App\CasosWeb;
use App\Casos;

class AdminController extends Controller
{
    public function home(){
        $registros = CasosWeb::all();
        $casos = CasosWeb::all();
        return view('home', compact('casos'));
    }

    public function bitacoraGetList(){
        $query = CasosWeb::where('Referencia', 'MANTENIMIENTO');
        return Datatables::of($query)->toJson();
    }

    public function actualizarCasos(){
        $registros = Casos::all();
        foreach ($registros as $registro) {
            CasosWeb::insert([
                'ID_CasoUniversalWeb' => $registro->ID_CasoUniversalWeb,
                'Numero_Caso' => $registro->Numero_Caso,
                'Nombre_Cliente' => $registro->Nombre_Cliente,
                'Serial' => $registro->Serial,
                'Referencia' => $registro->Referencia,
                'DescripcionSubRef1' => $registro->DescripcionSubRef1,
                'Modulo' => $registro->Modulo,
                'DescripcionSubMod1' => $registro->DescripcionSubMod1,
                'DescripcionCaso' => $registro->DescripcionCaso,
                'ObservacionesCaso' => $registro->ObservacionesCaso,
                'ReferenciaCliente' => $registro->ReferenciaCliente,
                'Cli_Usuario' => $registro->Cli_Usuario,
                'Agencia' => $registro->Agencia,
                'Canal' => $registro->Canal,
                'DescripcionCanal' => $registro->DescripcionCanal,
                'Responsable' => $registro->Responsable,
                'FechaHora_Creacion' => $registro->FechaHora_Creacion,
                'SuspendeServ' => $registro->SuspendeServ,
                'DescripcionSeveridad' => $registro->DescripcionSeveridad,
                'NumeroUSHP' => $registro->NumeroUSHP,
                'FechaHora_Cerrado' => $registro->FechaHora_Cerrado,
                'Activo' => $registro->Activo,
                'Prioridad' => $registro->Prioridad,
                'DescripcionAmbiente' => $registro->DescripcionAmbiente,
                'Descripcion' => $registro->Descripcion,
                'CodigoAgencia' => $registro->CodigoAgencia,    
            ]);
        } 
    }
}
