<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreedomFightersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freedom_fighters', function (Blueprint $table) {
        
             $table->increments('id');
            $table->integer('ff_title_id')->unsigned();
            $table->string('number');
            $table->string('name');
            $table->string('sector');
            $table->string('title');
            $table->string('gadget_number');
            $table->string('image');
            $table->text('content');
            $table->foreign('ff_title_id')
               ->references('id')->on('ff_titles')
               ->onDelete('cascade');
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
        Schema::dropIfExists('freedom_fighters');
    }
}
