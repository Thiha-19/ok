<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->string('num_of_positions');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');//->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments');//->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruitments');
    }
}
