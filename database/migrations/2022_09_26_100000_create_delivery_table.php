<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); 
            $table->string('time');
            $table->bigInteger('kajukatri_250');
            $table->bigInteger('kajukatri_500');
            $table->bigInteger('chiki_250');
            $table->bigInteger('chiki_500');
            $table->bigInteger('ghari_250');
            $table->bigInteger('ghari_500');
            $table->bigInteger('kaju500');
            $table->bigInteger('badam500'); 
            $table->string('total_kg');
            $table->bigInteger('total_price_pending'); 
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
        Schema::dropIfExists('delivery');
    }
}
