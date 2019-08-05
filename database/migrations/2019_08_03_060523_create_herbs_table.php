<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 100);
            $table->longText('detail')->nullable();
            $table->integer('price');
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('herbs');
    }
}
