<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');


            $table->unsignedBigInteger("destination_id")->nullable();
            $table->foreign("destination_id")->references("id")->on("destinations")->onDelete("set null");


            $table->unsignedBigInteger("origin_id")->nullable();
            $table->foreign("origin_id")->references("id")->on("origins")->onDelete("set null");


            $table->unsignedBigInteger("journey_id")->nullable();
            $table->foreign("journey_id")->references("id")->on("journeys")->onDelete("set null");



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
        Schema::dropIfExists('travelers');
    }
};
