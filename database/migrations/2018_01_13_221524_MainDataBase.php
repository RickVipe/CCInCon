<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MainDataBase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
          Schema::create('alumnos', function($table){

            $table -> string('id', 20)->index()->unique();
            $table -> string('nombres', 45);
            $table -> string('apellidos', 45);
            $table -> date('fecha_nacimiento');
            $table -> string('direccion', 100);
            $table -> string('email', 191)->unique();
            $table -> string('password', 191);
            $table -> string('apoderado', 100);
            $table -> string('telefono', 30);
            $table->rememberToken();
            //$table->timestamps();
            $table -> primary('id');
        });

        Schema::create('coordinadors', function($table){
            $table -> string('id', 20)->index()->unique();
            $table -> string('nombres', 45);
            $table -> string('apellidos', 45);
            $table -> string('email', 191)->unique();
            $table -> string('password', 191);
            $table->rememberToken();
            //$table->timestamps();
            $table -> primary('id');
        });

        Schema::create('docentes', function($table){
            $table -> string('id', 20)->index()->unique();
            $table -> string('nombres', 45);
            $table -> string('apellidos', 45);
            $table -> string('especialidad', 10);
            $table -> string('email', 191)->unique();
            $table -> string('password', 191);
            $table -> string('telefono', 30);
            $table->rememberToken();
            //$table->timestamps();
            $table -> primary('id');
        });

        Schema::create('asignaturas', function($table){
            $table -> string('id', 20)->index();
            $table -> string('nombre', 60);

            $table -> primary('id');
        });
        Schema::create('cursos', function($table){
            $table -> string('id', 20)->index();
            $table -> string('id_grado', 20);
            $table -> string('id_asignatura', 20);
            $table -> string('id_docente', 20);

            $table -> primary('id');

        });

        Schema::create('grados', function($table){
            $table -> string('id', 20)->index();
            $table -> tinyInteger('nro');
            $table -> string('seccion', 1);
            $table -> string('nivel', 10);
            $table -> string('anio_academico');
            $table -> tinyInteger('vacantes');

            $table -> primary('id');
        });

        Schema::create('matriculas', function($table){
            $table -> string('id', 20)->index();
            $table -> string('id_alumno', 20);
            $table -> string('id_grado', 20);
            $table -> date('fecha');

            $table -> primary('id');
        });

        Schema::create('notas', function($table){
            $table -> string('id', 20);
            $table -> string('id_matricula', 20);
            $table -> string('id_curso', 20);
            $table -> tinyInteger('trimestre')->unsigned();
            $table -> tinyInteger('nota')->unsigned();
            $table -> string('observacion', 255);
            $table -> date('fecha_ing');

            $table -> primary('id');
        });
        Schema::create('fecha_ingreso', function($table){
            $table -> string('id', 20);
            $table -> string('anio_academico');
            $table -> tinyInteger('trimestre')->unsigned();
            $table -> date('fecha_inicio');
            $table -> date('fecha_fin');

            $table -> primary('id');
        });
        Schema::create('salon_horario', function($table){
            $table -> tinyInteger('nro_salon')->unsigned();
            $table -> string('horario', 50);
            $table -> string('tipo', 10);
            $table -> tinyInteger('capacidad');
            $table -> string('id_curso', 20);

            $table -> primary(['nro_salon', 'horario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('salon_horario');
      Schema::dropIfExists('notas');
      Schema::dropIfExists('matriculas');
      Schema::dropIfExists('cursos');
      Schema::dropIfExists('asignaturas');
      Schema::dropIfExists('coordinadors');
      Schema::dropIfExists('alumnos');
      Schema::dropIfExists('docentes');
      Schema::dropIfExists('grados');
      Schema::dropIfExists('fecha_ingreso');

    }
}
