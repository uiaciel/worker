<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crew_id')->unsigned();
            $table->foreign('crew_id')->references('id')->on('crews');
            $table->string('pdf_id');
            $table->string('pdf_family');
            $table->string('national_id');
            $table->string('family_id');
            $table->string('mobile');
            $table->string('email');
            $table->string('e_name_1')->nullable();
            $table->string('e_relationship_1')->nullable();
            $table->string('e_mobile_1')->nullable();
            $table->string('e_email_1')->nullable();
            $table->string('e_name_2')->nullable();
            $table->string('e_relationship_2')->nullable();
            $table->string('e_mobile_2')->nullable();
            $table->string('e_email_2')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
