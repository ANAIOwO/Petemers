<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phonenumber');
            $table->binary('petpicture')->default('default.jpg');
            $table->string('hospital');
            $table->string('medicalrecordnumber')->unique();
            $table->string('petname');
            $table->string('petgender');
            $table->string('petsclass');
            $table->string('chipnumber');
            $table->string('petbirthday');
            $table->string('breed');
            $table->string('rabiesid');
            $table->string('bloodtype');
            $table->string('fix');
            $table->string('specialmedicalhistory');
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
        Schema::dropIfExists('medical_records');
    }
}
