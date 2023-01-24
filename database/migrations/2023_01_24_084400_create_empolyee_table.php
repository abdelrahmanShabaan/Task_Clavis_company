<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpolyeeTable extends Migration
{
 

    public function up()
    {
        Schema::create('empolyees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('company');
            $table->string('email');
            $table->integer('phone');
            $table->timestamps();
        });
    }

 
    
    public function down()
    {
        Schema::dropIfExists('empolyees');
    }
}
