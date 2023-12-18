<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveFechaIngresoFromProductosTable extends Migration
{
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('fechaIngreso');
        });
    }

    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->date('fechaIngreso')->after('descripcion')->nullable();
        });
    }
}
