<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home(){
        /*
        $reg = DB::connection('sqlsrv')->table('CasoUniversal')
            ->join('Cliente_Caso', 'CasoUniversal.ID_CasoUniversal', 'Cliente_Caso.ID_Caso')
            ->join('Cliente', 'Cliente_Caso.ID_Cliente', 'Cliente.ID_Cliente')
            ->join('Cli_Usuario', 'CasoUniversal.ID_Usuario', 'Cli_Usuario.ID_Usuario')
            ->leftJoin('SuspenServicio', 'CasoUniversal.Suspende_Servicio', 'SuspenServicio.ID_SuspendeServ')
            ->get();

        
        $reg = DB::connection('sqlsrv')->table('CasoUniversal')
            ->select('CasoUniversalCab.Numero_Caso', 
            'CasoUniversal.Serial', 
            'Referencia.Descripcion AS Referencia', 
            'SubReferencia1.Descripcion AS "Descripción SubReferencia1"',
            'Modulo.Modulo',
            'SubModulo1.Descripcion AS "Descripcion SubModulo 1"',
            'CasoUniversal.Descripcion_Caso AS "Descripcion Caso"',
            'Observaciones_Caso AS "Observación Caso"',
            'Cli_Usuario.PrimerNombre_Usuario As Usuario',
            'Cli_Agencia.Descripcion_Agencia AS Agencia',
            'Canal.Descripcion',
            'CasoUniversal.DescripcionCanal',
            'Responsable.PrimerNombre_Responsable As Responsable',
            'CasoUniversal.FechaHora_Creacion AS Creación',
            'CasoUniversal.Fecha_Creacion AS "Fecha Creación"',
            'CasoUniversal.Hora_Creacion AS "Hora Creación"',
            'SuspenServicio.Descripcion AS "Suspende Servicio"',
            'CasoUniversal.RutaAdjunto',
            'CasoUniversal.Activo',
            'CasoUniversal.TipoMuestra',
            'CasoUniversal.ID_CasoUniversal',
            'CasoUniversalCab.ID_CasoUniversalCab',
            'Cliente_Caso.ID_Cliente',
            'CasoUniversal.ID_Agencia',
            'CasoUniversal.ID_Usuario',
            'CasoModulo.ID_ClienteModulo',
            'CasoModulo.ID_ClienteSubModulo1',
            'CasoReferencia.ID_Referencia',
            'CasoReferencia.ID_SubReferencia1',
            'CasoUniversal.Suspende_Servicio',
            'CasoUniversal.ID_Responsable',
            'CasoUniversal.ID_Canal',
            'CasoCiclo.ID_Ciclo',
            'CasoCiclo.ID_CasoCiclo',
            'CasoCiclo.ID_AsignaciondeTiempo',
            'CasoUniversal.Adjunto',
            )
            ->join('CasoUniversalCab', 'CasoUniversal.ID_CasoUniversalCab', 'CasoUniversalCab.ID_CasoUniversalCab')
            ->join('Cliente_Caso', 'CasoUniversal.ID_CasoUniversal', 'Cliente_Caso.ID_Caso')
            ->join('Cliente', 'Cliente_Caso.ID_Cliente', 'Cliente.ID_Cliente')
            ->join('Cli_Agencia', 'CasoUniversal.ID_Agencia', 'Cli_Agencia.ID_Agencia')
            ->join('Cli_Usuario', 'CasoUniversal.ID_Usuario', 'Cli_Usuario.ID_Usuario')
            ->join('CasoModulo', 'CasoUniversal.ID_CasoUniversal', 'CasoModulo.ID_CasoUniversal')
            ->leftJoin('Modulo','CasoModulo.ID_ClienteModulo','Modulo.ID_Modulo')
            ->leftJoin('SubModulo1','CasoModulo.ID_ClienteSubModulo1','SubModulo1.ID_SubModulo1')
            ->join('CasoReferencia', 'CasoUniversal.ID_CasoUniversal', 'CasoReferencia.ID_CasoUniversal')
            ->join('Referencia', 'CasoReferencia.ID_Referencia', 'Referencia.ID_Referencia')
            ->join('SubReferencia1', 'CasoReferencia.ID_SubReferencia1', 'SubReferencia1.ID_SubReferencia1')
            ->join('SuspenServicio', 'CasoUniversal.Suspende_Servicio', 'SuspenServicio.ID_SuspendeServ')
            ->join('CasoResponsable', 'CasoUniversal.ID_Responsable', 'CasoResponsable.ID_Responsable')
            ->join('Responsable', 'CasoUniversal.ID_Responsable', 'Responsable.ID_Responsable')
            ->join('CasoCiclo', 'CasoUniversal.ID_CasoUniversal', 'CasoCiclo.ID_CasoUniversal')
            ->join('Canal', 'CasoUniversal.ID_Canal', 'Canal.ID_Canal')
            ->groupBy(
            'CasoUniversal.ID_CasoUniversal',
            'CasoUniversalCab.ID_CasoUniversalCab',
            'CasoUniversalCab.Numero_Caso',
            'CasoUniversal.Serial',
            'Referencia.Descripcion',
            'SubReferencia1.Descripcion',
            'Modulo.Modulo',
            'SubModulo1.Descripcion',
            'CasoUniversal.Descripcion_Caso',
            'CasoUniversal.FechaHora_Creacion',
            'CasoUniversal.Fecha_Creacion',
            'CasoUniversal.Hora_Creacion',
            'SuspenServicio.Descripcion',
            'CasoUniversal.Activo',
            'CasoUniversal.Observaciones_Caso',
            'Cli_Usuario.PrimerNombre_Usuario ',
            'CasoCiclo.ID_Ciclo',
            'CasoCiclo.ID_CasoCiclo',
            'CasoCiclo.ID_AsignaciondeTiempo',
            'CasoUniversal.TipoMuestra',
            'Canal.Descripcion',
            'CasoUniversal.DescripcionCanal',
            'CasoUniversal.Adjunto',
            'CasoUniversal.RutaAdjunto',
            'Cli_Agencia.Descripcion_Agencia',
            'Responsable.PrimerNombre_Responsable',
            'Cliente_Caso.ID_Cliente',
            'CasoUniversal.ID_Agencia',
            'CasoUniversal.ID_Usuario',
            'CasoModulo.ID_ClienteModulo',
            'CasoModulo.ID_ClienteSubModulo1',
            'CasoReferencia.ID_Referencia',
            'CasoReferencia.ID_SubReferencia1',
            'CasoUniversal.Suspende_Servicio',
            'CasoUniversal.ID_Responsable',
            'CasoUniversal.ID_Canal')
            ->orderBy('CasoUniversalCab.Numero_Caso', 'DESC')
            ->get();
            */
        return view('home');
    }
}
