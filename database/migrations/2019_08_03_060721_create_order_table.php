<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('spa_id')->nullable();
            $table->unsignedInteger('herb_id')->nullable();
            $table->unsignedInteger('docter_id')->nullable();
            $table->unsignedInteger('payment_id');
            $table->char('name', 100);
            $table->longText('address');
            $table->char('phone', 10);
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->char('typeBooking')->nullable();
            $table->integer('status');  // 0 รอโอน // 1โอน // 2 รอจัดส่ง // 3 จัดส่ง
            $table->string('image')->nullable(); //หลักฐานการโอนเงิน
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
        Schema::dropIfExists('order');
    }
}
