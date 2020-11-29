<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasosWeb extends Model
{
    protected $fillable = [
        'ID_CasoUniversalWeb',
        'Numero_Caso',
        'Nombre_Cliente',
        'Serial',
        'Referencia',
        'DescripcionSubRef1',
        'Modulo',
        'DescripcionSubMod1',
        'DescripcionCaso',
        'ObservacionesCaso',
        'ReferenciaCliente',
        'Cli_Usuario',
        'Agencia',
        'Canal',
        'DescripcionCanal',
        'Responsable',
        'FechaHora_Creacion',
        'SuspendeServ',
        'DescripcionSeveridad',
        'FechaHora_Cerrado',
        'Activo',
        'Prioridad',
        'DescripcionAmbiente',
        'Descripcion',
        'CodigoAgencia'
    ];
}

