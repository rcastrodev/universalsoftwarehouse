@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('title', 'Gestión')
@section('content_header') 
<h1>Detalle {{ $items->Numero_Caso }} <a href="{{ route('gestion') }}" class="btn btn-sm btn-primary">Gestión</a></h1>
@stop
@section('content')
  	<ul class="nav nav-tabs" id="myTab" role="tablist">
    	<li class="nav-item">
      	<a class="nav-link active" id="general" data-toggle="tab" href="#general-tab" role="tab" aria-controls="general-tab" aria-selected="true">General</a>
    	</li>
		<li class="nav-item">
			<a class="nav-link" id="detalle" data-toggle="tab" href="#detalle-tab" role="tab" aria-controls="detalle-tab" aria-selected="false">Detalle</a>
		</li>
		<a class="nav-item nav-link" id="adjunto-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Adjunto</a>
  	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="general-tab" role="tabpanel" aria-labelledby="general">
			<div class="row p-5">
				<div class="col-sm-12 col-md-6">
					<div class="card card-primary">
						<!-- /.card-header -->
						<!-- form start -->
						<div class="card-body">
							<div class="form-group">
								<label for="">Número de caso</label>
								<input type="text" class="form-control" value="{{$items->Numero_Caso}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Nombre del cliente</label>
								<input type="text" class="form-control" value="{{$items->Nombre_Cliente}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Serial</label>
								<input type="text" class="form-control" value="{{$items->Serial}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Referencia</label>
								<input type="text" class="form-control" value="{{$items->Referencia}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Módulo</label>
								<input type="text" class="form-control" value="{{$items->Modulo}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Referencia cliente</label>
								<input type="text" class="form-control" value="{{$items->ReferenciaCliente}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Cli usuario</label>
								<input type="text" class="form-control" value="{{$items->Cli_Usuario}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Agencia</label>
								<input type="text" class="form-control" value="{{$items->Agencia}}" readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="card card-primary">
						<!-- /.card-header -->
						<!-- form start -->
						<div class="card-body">
							<div class="form-group">
								<label for="">Canal</label>
								<input type="text" class="form-control" value="{{$items->Canal}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Responsable</label>
								<input type="text" class="form-control" value="{{$items->Responsable}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Fecha creación</label>
								<input type="text" class="form-control" value="{{$items->FechaHora_Creacion}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Suspende serv</label>
								<input type="text" class="form-control" value="{{$items->SuspendeServ}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Número USHP</label>
								<input type="text" class="form-control" value="{{$items->NumeroUSHP}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Fecha cerrado</label>
								<input type="text" class="form-control" value="{{$items->FechaHora_Cerrado}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Activo</label>
								<input type="text" class="form-control" value="{{$items->Activo}}" readonly>
							</div>
							<div class="form-group">
								<label for="">Prioridad</label>
								<input type="text" class="form-control" value="{{$items->Prioridad}}" readonly>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="detalle-tab" role="tabpanel" aria-labelledby="detalle">
			<div class="row p-5">
				<div class="col-sm-12">
					<div class="card card-primary">
						<!-- /.card-header -->
						<!-- form start -->
						<div class="card-body">
							<div class="form-group mb-3">
								<label for="">Descripción sub ref 1</label>
							<textarea name="DescripcionSubRef1" id="DescripcionSubRef1" class="ckeditor" cols="30" rows="10" readonly>{{$items->DescripcionSubRef1}}</textarea>
							</div>
							<div class="form-group">
								<label for="">Descripción sub modf 1</label>
							<textarea name="DescripcionSubMod1" id="DescripcionSubMod1" class="ckeditor" cols="30" rows="10" readonly>{{$items->DescripcionSubMod1}}</textarea>
							</div>
							<div class="form-group">
								<label for="">Descripción caso</label>
								<textarea name="DescripcionCaso" id="DescripcionCaso" class="ckeditor" cols="30" rows="10" readonly>{{$items->DescripcionCaso}}</textarea>
							</div>
							<div class="form-group">
								<label for="">Observaciones caso</label>
								<textarea name="ObservacionesCaso" id="ObservacionesCaso" class="ckeditor" cols="30" rows="10" readonly>{{$items->ObservacionesCaso}}</textarea>
							</div>
							<div class="form-group">
								<label for="">Descripción canal</label>
								<textarea name="DescripcionCanal" id="DescripcionCanal" class="ckeditor" cols="30" rows="10" readonly>{{$items->DescripcionCanal}}</textarea>
							</div>
							<div class="form-group">
								<label for="">Descripcion severidad</label>
								<textarea name="DescripcionSeveridad" id="DescripcionSeveridad" class="ckeditor" cols="30" rows="10" readonly>{{$items->DescripcionSeveridad}}</textarea>
							</div>
							<div class="form-group">
								<label for="">Descripción ambiente</label>
								<textarea name="DescripcionAmbiente" id="DescripcionAmbiente" class="ckeditor" cols="30" rows="10" readonly>{{$items->DescripcionAmbiente}}</textarea>
							</div>
							<div class="form-group">
								<label for="">Descripción</label>
								<textarea name="Descripcion" id="Descripcion" class="ckeditor" cols="30" rows="10" readonly>{{$items->Descripcion}}</textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="adjunto-tab">...</div>
	</div>
@stop
@section('js')
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
@endsection