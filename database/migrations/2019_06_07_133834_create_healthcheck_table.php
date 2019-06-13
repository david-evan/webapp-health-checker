<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthcheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthcheck', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->smallInteger('HTTPCode')->unsigned();
            $table->integer('healthchecker_id')->unsigned(); //Foreign key
            $table->timestamp('createdAt');

            // Foreign keys definitions
            $table->foreign('healthchecker_id')->references('id')->on('healthchecker')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('healthcheck');
    }
}
