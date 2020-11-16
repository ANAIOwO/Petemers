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
            $table->string('names');
            $table->string('phonenumber');
            $table->string('birthday');
            $table->string('address');
            $table->string('email');
            $table->string('remark');
            $table->string('petpicture')->default('default.jpg');
            $table->string('medicalrecordnumber')->unique();
            $table->string('petname');
            $table->string('petgender');
            $table->string('petsclass');
            $table->string('otherpets');
            $table->string('chipnumber');
            $table->string('petbirthday');
            $table->string('breed');
            $table->string('otherbreed');
            $table->string('rabiesid');
            $table->string('bloodtype');
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
