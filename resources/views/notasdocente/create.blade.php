@extends('layouts.layoutD')

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
          Registrar Notas
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" method="post" action="#" autocomplete="off">
                @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> {{ $error }}
                  </div>
                @endforeach
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <div class="form-group">
                  <label>Id Alumno</label>
                  <input disabled="" type="text" value=" {{$alumno -> id}} " class="form-control" name ='apellidos' >
                </div>

                <div class="form-group">
                  <label>Apellidos y Nombres</label>
                  <input disabled="" type="text" value=" {{$alumno -> apellidos}} {{$alumno -> nombres}} " class="form-control" name ='apellidos' >
                </div>


                <div class="form-group">
                  <label>Trimestre</label><br>
                  <select name="trimestre" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select> <br>
                </div>

                <div class="form-group">
                  <label>Nota</label>
                  <input type="numeric" class="form-control" name="nota">
                </div>

                <div class="form-group">
                  <label>Observaciones</label><br>
                  <input type="text" class="form-control" name="observaciones" style="text-transform:uppercase;"
                  onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-warning">Limpiar</button>
                <button type="button" class="btn btn-danger" onClick="location.href='/grados'">Volver</button>
              </form>
            </div>

@stop