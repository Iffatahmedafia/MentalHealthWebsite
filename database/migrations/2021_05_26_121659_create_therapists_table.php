<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapists', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('gender');
            $table->string('field');
            $table->text('sformat');
            $table->string('stype');
            $table->text('start');
            $table->text('end');
            $table->string('age');
            $table->text('email');
            $table->text('phone');
            $table->text('username');
            $table->text('pass');
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
        Schema::dropIfExists('therapists');
    }
}
