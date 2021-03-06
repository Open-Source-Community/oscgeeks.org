<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('year');
            $table->string('first_committee');
            $table->string('second_committee');
            $table->integer('day');
            $table->integer('time');
            $table->string('status')->nullable();
            $table->string('comment')->nullable();
            $table->string('hr_interciewer')->nullable();
            $table->string('first_com_interviewer')->nullable();
            $table->string('second_com_interviewer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruits');
    }
}
