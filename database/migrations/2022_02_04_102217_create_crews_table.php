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
            $table->string('child')->nullable();
            $table->string('specialmark')->nullable();
            $table->string('status')->nullable();;
            $table->string('nationaly')->nullable();
            $table->string('photo')->nullable();

            $table->string('visa_id')->nullable();
            $table->string('passport_id')->nullable();
            $table->string('orangebook_id')->nullable();
            $table->string('seamanbook_id')->nullable();


            $table->string('signoff')->nullable();
            $table->string('currencysalary')->nullable();
            $table->string('salary')->nullable();

            $table->string('shoes')->nullable();
            $table->string('glove')->nullable();
            $table->string('kappa')->nullable();
            $table->string('remark')->nullable();
            $table->string('license')->nullable();

            $table->string('mobile_1')->nullable();
            $table->string('email_1')->nullable();
            $table->string('mobile_2')->nullable();
            $table->string('email_2')->nullable();

            $table->string('emergency_name_1')->nullable();
            $table->string('emergency_relation_1')->nullable();
            $table->string('emergency_mobile_1')->nullable();
            $table->string('emergency_email_1')->nullable();

            $table->string('emergency_name_2')->nullable();
            $table->string('emergency_relation_2')->nullable();
            $table->string('emergency_mobile_2')->nullable();
            $table->string('emergency_email_2')->nullable();

            $table->string('path_ktp')->nullable();
            $table->string('ktp_id')->nullable();

            $table->string('path_kk')->nullable();
            $table->string('kk_id')->nullable();


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
