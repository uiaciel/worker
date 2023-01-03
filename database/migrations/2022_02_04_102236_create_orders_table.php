<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('inv');
            $table->string('status');
            $table->string('shipowner');
            $table->string('shipname');
            $table->string('shipmaru');
            $table->string('shipnumber');
            $table->string('shiptype');
            $table->string('fishingarea');
            $table->string('nationaly');
            $table->integer('member');
            $table->text('remarks')->nullable();
            $table->string('periode');
            $table->date('start');
            $table->date('end');
            $table->string('portstart');
            $table->string('portend');
            $table->string('airticketby')->nullable();
            $table->integer('step_1')->default(0); //create order
            $table->integer('step_2')->default(0); //request crew
            $table->integer('step_3')->default(0); //admin add crew
            $table->integer('step_4')->default(0); //klien approval crew
            $table->integer('step_5')->default(0); //admin add ticket
            $table->integer('step_6')->default(0); //klien issued ticket
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
        Schema::dropIfExists('orders');
    }
}
