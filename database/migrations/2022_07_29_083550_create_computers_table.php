<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{

    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('origin');
            $table->integer('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
