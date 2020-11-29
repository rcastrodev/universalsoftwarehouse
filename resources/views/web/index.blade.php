@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('title', "Web")
@section('content_header')
<h1>Web</h1>
@stop
@section('content')
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered" id="tabla_web">
        <thead>
            <tr>
                <th>Número de casos</th>
                <th>Nombre del cliente</th>
                <th>Serial</th>
                <th>Referencia</th>
                <th>Descripción subref 1</th>
                <th>Módulo</th>
                <th>Descripción submod 1</th>
                <th>Descripción caso</th>
                <th>Observaciones caso</th>
                <th>Referencia cliente</th>
                <th>Cli usuario</th>
                <th>Agencia</th>
                <th>Canal</th>
                <th>Descripción canal</th>
                <th>Responsable</th>
                <th>Fecha creación</th>
                <th>Suspende serv</th>
                <th>Descripción severidad</th>
                <th>Número USH</th>
                <th>Fecha cerrado</th>
                <th>Activo</th>
                <th>Prioridad</th>
                <th>Descripcion ambiente</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
@stop
@section('js')
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script>
    $('#tabla_web').DataTable({
        serverSide: false,
        ajax: `{{ config('app.url') }}/admin/web/get-list`,
        bSort: true,
        columns: [
            { data: "Numero_Caso", name: "Numero_Caso" },
            { data: "Nombre_Cliente", name: "Nombre_Cliente" },
            { data: "Serial", name: "Serial" },
            { data: "Referencia", name: "Referencia" },
            { data: "DescripcionSubRef1", name: "DescripcionSubRef1" },
            { data: "Modulo", name: "Modulo" },
            { data: "DescripcionSubMod1", name: "DescripcionSubMod1" },
            { data: "DescripcionCaso", name: "DescripcionCaso" },
            { data: "ObservacionesCaso", name: "ObservacionesCaso" },
            { data: "ReferenciaCliente", name: "ReferenciaCliente" },
            { data: "Cli_Usuario", name: "Cli_Usuario" },
            { data: "Agencia", name: "Agencia" },
            { data: "Canal", name: "Canal" },
            { data: "DescripcionCanal", name: "DescripcionCanal" },
            { data: "Responsable", name: "Responsable" },
            { data: "FechaHora_Creacion", name: "FechaHora_Creacion" },
            { data: "SuspendeServ", name: "SuspendeServ" },
            { data: "DescripcionSeveridad", name: "DescripcionSeveridad" },
            { data: "NumeroUSHP", name: "NumeroUSHP" },
            { data: "FechaHora_Cerrado", name: "FechaHora_Cerrado" },
            { data: "Activo", name: "Activo" },
            { data: "Prioridad", name: "Prioridad" },
            { data: "DescripcionAmbiente", name: "DescripcionAmbiente" },
            { data: "Descripcion", name: "Descripcion" },
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: ['excel'],
        exportOptions: {
            modifer: {
                page: 'all',
                search: 'none'
            }
        }
    });
</script>
@stop