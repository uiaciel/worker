<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crew_id')->unsigned();
            $table->foreign('crew_id')->references('id')->on('crews');
            $table->string('vesselsname');
            $table->string('maru');
            $table->string('number');
            $table->string('affiliation')->nullable();
            $table->date('signon');
            $table->date('signoff');
            $table->integer('periode');
            $table->string('currencysalary');

            $table->integer('salary');
            $table->integer('bonus');
            $table->string('currencybonus');
            
            $table->string('shipflag');
            $table->string('freezer');
            $table->string('type');
            $table->string('fishingground');
            $table->string('tonnage');
            $table->string('fishingmaster');
            $table->string('coldarea');
            $table->string('disembark');
            $table->string('grade')->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
