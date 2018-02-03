@extends('layouts.layout')

@section('content')
<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					Datos del alumno
				</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role='form'>
							
							<div class="form-group">
										<label>DNI</label>
										<input disabled="" type="text" value=" {{$alumno -> id}} " class="form-control" name ='dni'>
									</div>
									<div class="form-group">
										<label>Nombres</label>
										<input disabled="" type="text" value=" {{$alumno -> nombres}} " class="form-control" name ='nombres'>
									</div>
									<div class="form-group">
										<label>Apellidos</label>
										<input disabled="" type="text" value=" {{$alumno -> apellidos}} " class="form-control" name ='apellidos' >
									</div>

									<div class="form-group">
										<label>Fecha de nacimiento</label>
										<input disabled="" type="text" value=" {{$alumno -> fecha_nacimiento}} " class="form-control"  name ='fecha_nacimiento'>
									</div>
									<div class="form-group">
										<label>Direccion</label>
										<input disabled="" type="text" value=" {{$alumno -> direccion}} " class="form-control"  name ='direccion' >
									</div>
									
									<div class="form-group">
										<label>Email</label>
										<input disabled="" type="email" value=" {{$alumno -> email}} " class="form-control"  name ='email'>
									</div>
									<div class="form-group">
										<label>Apoderado</label>
										<input disabled="" type="text" value=" {{$alumno -> apoderado}} " class="form-control" name ='apoderado' >
									</div>
									<div class="form-group">
										<label>Telefono</label>
										<input disabled="" type="tel" value=" {{$alumno -> telefono}} " class="form-control"  name ='telefono'>
									</div>
									<button type="button" class="btn btn-danger"
                onClick="location.href='{!! action('AsignaturaController@index') !!}'">Volver</button>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop