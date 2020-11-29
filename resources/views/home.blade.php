@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('title', 'Dashboard')
@section('content_header')
{{-- <h1>Dashboard</h1> --}}
<div class="row align-items-center mb-4">
    <div class="col-md-2"></div>
    <img src="{{ asset('img/kuriacoop.png') }}" alt="logo" class="d-block mx-auto col-md-4 position-relative" style="max-width: 200px;">
    <div class="col-md-6 nroPromedio text-center">100 <span>%</span></div>
</div>
@stop
@section('content')
<div class="row adminHome">
    <a href="{{ route('agencia.index') }}" class="col-12 col-sm-6 col-md-4">
        <div class="info-box" {{-- data-toggle="modal" data-target=".detallesAgencias" --}}>
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-building"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">AGENCIA </span>
                <span class="info-box-number"><span id="promedioGeneralAgencia">100</span><small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </a>
    
    
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-4 deshabilitado" {{-- data-toggle="modal" data-target=".canales" --}}>
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sitemap"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CANALES</span>
                <span class="info-box-number">0<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
    <div class="col-12 col-sm-6 col-md-4 deshabilitado" {{-- data-toggle="modal" data-target=".coopac" --}}>
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-university"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">COOPERATIVAS</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <a href="{{ route('web.index') }}" class="col-12 col-sm-6 col-md-4"> 
        <div class="info-box detalle" {{-- data-toggle="modal" data-target=".generico" --}}>
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-desktop"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">WEB</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </a>
    <!-- /.col -->
    
    <a href="{{ route('credito.index') }}" class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" {{-- data-toggle="modal" data-target=".generico" --}}>
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-credit-card"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CREDITOS</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
    <a href="{{ route('inversion.index') }}" class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" {{-- data-toggle="modal" data-target=".generico" --}}
        >
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-folder-open"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Inversiones - DPF</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </a>
    <a href="{{ route('cuenta.index') }}" class="col-12 col-sm-6 col-md-4">
        <div class="info-box detalle" {{-- data-toggle="modal" data-target=".generico" --}}>
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-address-card"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CUENTAS</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="{{ route('crm.index') }}" class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" {{-- data-toggle="modal" data-target=".generico" --}}
        >
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CRM</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
    <a href="{{ route('contabilidad.index') }}" class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" {{-- data-toggle="modal" data-target=".generico" --}}
        >
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calculator"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CONTABILIDAD</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </a>
    <!-- /.col -->
  </div>
  <div class="text-right">
        <button type="button" class="btn btn-info btnTriggerAgencia d-none" data-toggle="modal" data-target=".generico">generico</button>
  </div>
  @include('partials.modals.form_generico')
  @include('partials.modals.canales')
  @include('partials.modals.coopac')
@stop
@section('js')
<script>
$(document).ready(function() {
    $('.detalle').click(function(){
        $('#tituloGenerico').text($(this).children('.info-box-content').children('.info-box-text').text())
    })

    $('.trDetalles').click(function(){
        const agencia = $(this).children('.nombreAgencia').text()
        setTimeout(() => {
            $('.btnTriggerAgencia').trigger('click')
            $('#tituloGenerico').text(agencia)
        }, 500);
    })

    $('#contentATM').click(function(){
        setTimeout(() => {
            $('.btnTriggerAgencia').trigger('click')
            $('#tituloGenerico').text('ATM')
        }, 500);
    })

    $('#referencia').on('change', function() {
        if(this.value == 3){
            $("#contentServicios").removeClass('d-none').addClass('d-block')
        }else{
            $("#contentServicios").removeClass('d-block').addClass('d-none')
        }
    })
})  
</script>
@stop