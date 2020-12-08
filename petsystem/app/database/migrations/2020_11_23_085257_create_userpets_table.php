<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserpetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userpets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userid');
            $table->string('phonenumber');
            $table->binary('petpicture')->default('default.jpg');
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
        Schema::dropIfExists('userpets');
    }
}
