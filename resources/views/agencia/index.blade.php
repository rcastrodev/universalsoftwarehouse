@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('title', 'Agencias')
@section('content_header')
    <h1>Agencias</h1>
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title text-center">Agencias</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table tableDetalle" id="table-agencias">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Código</th>
                <th>Agencia</th>
                <th>Progreso</th>
                <th style="width: 40px">%</th>
            </tr>
        </thead>
        <tbody>
            <tr class="trDetalles" data-dismiss="modal">
                <td>1.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>101]) }}">000101</a></td>
                <td class="nombreAgencia" data-number="100">Agencia San Isidro</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>2.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>102]) }}">000102</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Surco</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>3.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>103]) }}">000103</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Los Olivos</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>4.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>201]) }}">000201</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Piura</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>5.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>202]) }}">000202</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Chiclayo</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>6.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>203]) }}">000203</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Trujillo</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>7.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>301]) }}">000301</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Ica</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>8.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>302]) }}">000302</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Arequipa </td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>9.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>203]) }}">000203</a></td>
                <td class="nombreAgencia" data-number="100">Agencia Cusco</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
            <tr class="trDetalles" data-dismiss="modal">
                <td>10.</td>
                <td><a href="{{ route('agencia.show', ['agencium'=>901]) }}">000901</a></td>
                <td class="nombreAgencia" data-number="100">Oficina Central San Isidro</td>
                <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
                </td>
                <td><span class="badge bg-success">100%</span></td>
            </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@stop
@section('js')
@stop