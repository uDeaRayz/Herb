<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 100);
            $table->char('age',10);
            $table->longText('history')->nullable();
            $table->longText('disease')->nullable();
            $table->string('address')->nullable();
            $table->string('subdis')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
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
        Schema::dropIfExists('docter');
    }
}
