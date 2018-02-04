@extends('layouts.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
  </div>
</div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          Ingrese los datos del Curso
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" method="post" action="/menucoordinadores/cursos" autocomplete="off">
                @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> {{ $error }}
                  </div>
                @endforeach
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <div class="form-group">
                  <label>Grado</label>
                  <select name="id_grado" class="form-control">
                    <option value="" select  ></opcion>
                    @foreach($grados as $grado)
                      <option value="{!! $grado->id !!}" >{{ $grado->nro }} {{ $grado->seccion }} {{ $grado->nivel }} {{ $grado->anio_academico }}</opcion>

                    @endforeach


                  </select>
                </div>
                <div class="form-group">
                  <label>Asignatura</label>
                  <select name="id_asignatura" class="form-control">
                    <option value="" select  ></opcion>
                    @foreach($asignaturas as $asignatura)
                      <option value="{!! $asignatura->id !!}" >{!! $asignatura->nombre!!}</opcion>

                    @endforeach


                  </select>
                </div>
                <div class="form-group">
                  <label>Docente</label>
                  <select name="id_docente" class="form-control">
                    <option value="" select  ></opcion>

                    @foreach($docentes as $docente)
                      <option value="{!! $docente->id !!}" >{!!$docente->nombres!!} {!! $docente->apellidos!!}</opcion>

                    @endforeach


                  </select>
                </div>






                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-warning">Limpiar</button>
                <button type="button" class="btn btn-danger" onClick="location.href='/cursos'">Volver</button>
              </form>
            </div>

@stop