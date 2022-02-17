<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteDiscussTypeFromComment extends Migration
{
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            //
            $table->dropColumn('discuss_type');
        });
    }

    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            //
            $table->addColumn('discuss_type');
        });
    }
}
