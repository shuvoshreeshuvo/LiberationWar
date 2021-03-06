<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFfTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ff_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname');
            $table->string('enickname');
            $table->integer('number');
            $table->string('image');
            $table->text('content');
             $table->text('intro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ff_titles');
    }
}
