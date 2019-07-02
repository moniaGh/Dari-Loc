<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Annonces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->string('transaction');
            $table->string('title');
            $table->string('category');
            $table->string('region');
            $table->string('city');
            $table->integer('numberLiveRoom');
            $table->integer('numberBedRoom');
            $table->integer('numberBathRoom');
            $table->float('area');
            $table->text('options');
            $table->text('address');
            $table->text('addressDescription');
            $table->text('pubDescription');
            $table->float('price');
            $table->string('typeDate');
            $table->text('picture-1');
            $table->text('picture-2');
            $table->text('picture-3');
            $table->text('picture-4');
            $table->text('picture-5');
            $table->text('picture-6');
            $table->text('picture-7');
            $table->text('picture-8');
            $table->text('picture-9');
            $table->text('picture-10');
            $table->text('picture-11');
            $table->text('picture-12');
            $table->integer('views');
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
        Schema::dropIfExists('ads');
    }
}
