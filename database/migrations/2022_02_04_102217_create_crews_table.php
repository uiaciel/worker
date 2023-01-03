<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crews', function (Blueprint $table) {
            $table->id();
 
            $table->string('subid');
            $table->string('name')->nullable();
            $table->string('place')->nullable();
            $table->date('birth')->nullable();
            $table->string('religion')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('marital')->nullable();
            $table->string('specialmark')->nullable();
            $table->string('status')->nullable();;
            $table->string('nationaly')->nullable();
            $table->string('photo')->nullable();
            $table->string('visa_id')->nullable();
            $table->date('visa_issued')->nullable();
            $table->string('visa_place')->nullable();
            $table->date('visa_valid')->nullable();
            
            $table->string('passport_id')->nullable();
            $table->date('passport_issued')->nullable();
            $table->string('passport_place')->nullable();
            $table->date('passport_valid')->nullable();

            $table->string('orangebook_id')->nullable();
            $table->date('orangebook_issued')->nullable();
            $table->string('orangebook_place')->nullable();
            $table->date('orangebook_valid')->nullable();

            $table->string('seamanbook_id')->nullable();
            $table->date('seamanbook_issued')->nullable();
            $table->string('seamanbook_place')->nullable();
            $table->date('seamanbook_valid')->nullable();
            
            $table->string('signoff')->nullable();
            $table->string('currencysalary')->nullable();
            $table->string('salary')->nullable();
        
            $table->string('shoes')->nullable();
            $table->string('glove')->nullable();
            $table->string('kappa')->nullable();
            $table->string('remark')->nullable();
            $table->string('license')->nullable();
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
        Schema::dropIfExists('crews');
    }
}
