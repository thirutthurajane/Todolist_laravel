<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussesTable extends Migration
{
    public function up()
    {
        Schema::create('discusses', function (Blueprint $table) {
            $table->id();

            //
            $table->string('topic');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discusses');
    }
}
