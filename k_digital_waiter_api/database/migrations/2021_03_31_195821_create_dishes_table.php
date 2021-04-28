<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->float('precio');
            $table->timestamps();
            $table->string('ruta');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
