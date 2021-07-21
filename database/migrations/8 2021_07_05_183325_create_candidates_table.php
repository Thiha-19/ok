<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_name');
            $table->string('email');
            $table->date('dob');
            $table->string('postal');
            $table->string('phone');
            $table->string('prior_exp');
            $table->string('education');
            $table->string('gradfrom');
            $table->string('graddate');
            $table->string('add_info');
            $table->string('expected_salary');
            $table->timestamps();

            $table->unsignedBigInteger('recruitment_id');


            $table->foreign('recruitment_id')->references('id')->on('recruitments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
