@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('title', 'Dashboard')
@section('content_header')
{{-- <h1>Dashboard</h1> --}}
<div class="row align-items-center mb-4">
    <div class="col-md-2"></div>
    <img src="{{ asset('img/ciderural.png') }}" alt="logo" class="d-block mx-auto col-md-4 position-relative" style="top:-15px;">
    <div class="col-md-6 nroPromedio text-center">100 <span>%</span></div>
</div>

@stop
@section('content')
<div class="row adminHome">
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box" data-toggle="modal" data-target=".detallesAgencias">
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-building"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">AGENCIA </span>
                <span class="info-box-number"><span id="promedioGeneralAgencia">100</span><small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target=".canales">
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
    <div class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target=".coopac">
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
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box detalle" data-toggle="modal" data-target=".generico">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-desktop"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">WEB</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" data-toggle="modal" data-target=".generico">
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-credit-card"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CREDITOS</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" data-toggle="modal" data-target=".generico">
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-folder-open"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">DPF</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box detalle" data-toggle="modal" data-target=".generico">
            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-address-card"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CUENTAS</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" data-toggle="modal" data-target=".generico">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CRM</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
    <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-3 detalle" data-toggle="modal" data-target=".generico">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calculator"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">CONTABILIDAD</span>
                <span class="info-box-number">100<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <div class="text-right">
        <button type="button" class="btn btn-info btnTriggerAgencia d-none" data-toggle="modal" data-target=".generico">generico</button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target=".gestion">Gestión</button>
        <button type="button" class="btn btn-info" id="masDetalles" data-toggle="modal" data-target=".bitacora">Bitácora</button>
  </div>

  @include('partials.modals.gestion')
  @include('partials.modals.agencias')
  @include('partials.modals.form_generico')
  @include('partials.modals.bitacora')
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


    //Obtener el porcentaje de agencias 

    function obtenerElPorcentajePorEmpresa(){

        let agenciasP = document.querySelectorAll('#table-agencias .nombreAgencia')
        let porcentajes = []
        let porcentajeEmpresa = 0

        agenciasP.forEach(element => {
            porcentajes.push(element.getAttribute('data-number'))
        }) 

        porcentajes.forEach(element => {
            if(Number.isInteger(parseInt(element))){
                porcentajeEmpresa += parseInt(element)
            }   
        })

        document.getElementById('promedioGeneralAgencia').textContent = porcentajeEmpresa / porcentajes.length
    }

    setInterval(() => {
        obtenerElPorcentajePorEmpresa()
    }, 2000);
    

})  
</script>
@stop