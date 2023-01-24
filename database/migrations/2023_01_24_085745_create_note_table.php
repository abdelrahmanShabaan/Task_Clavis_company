<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteTable extends Migration
{

    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('company_num')->NULL;
            $table->integer('empolyee_nu')->NULL;
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
