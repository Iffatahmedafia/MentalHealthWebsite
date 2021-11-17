<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('username');
            $table->text('email');
            $table->text('Sid');
            $table->text('Sname');
            $table->date('date');
            $table->text('time');
            $table->text('status')->default('pending');
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
        Schema::dropIfExists('flights');
    }
}
