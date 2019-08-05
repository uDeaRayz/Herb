<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 100);
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->longText('detail')->nullable();
            $table->char('phone',10)->nullable();
            $table->integer('price');
            $table->time('worktime_start');
            $table->time('worktime_stop');
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
        Schema::dropIfExists('spa');
    }
}
