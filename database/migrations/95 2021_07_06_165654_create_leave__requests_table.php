<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave__requests', function (Blueprint $table) {
            $table->id();
            $table->string('reason');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('addinfo');
            $table->timestamps();

            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('approval_id');

            $table->foreign('employee_id')->references('id')->on('users');
            $table->foreign('approval_id')->references('id')->on('approvals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave__requests');
    }
}
