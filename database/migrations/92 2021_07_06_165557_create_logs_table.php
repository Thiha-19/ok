<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->string('text');
            $table->timestamps();

            $table->unsignedBigInteger('log_type_id');
            $table->unsignedBigInteger('employee_id');

            $table->foreign('log_type_id')->references('id')->on('log_types');//->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('users');//->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
