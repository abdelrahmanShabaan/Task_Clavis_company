<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaineTable extends Migration
{
  
    public function up()
    {
        Schema::create('compaines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('website');
            $table->timestamps();
        });
    }




    public function down()
    {
        Schema::dropIfExists('compaines');
    }
}
