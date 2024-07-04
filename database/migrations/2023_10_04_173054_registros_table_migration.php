<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
          Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('measure_id')->unsigned();
            $table->bigInteger('varsen_id')->unsigned();

            $table->foreign('measure_id')
                  ->references('id')
                  ->on('measures')->onDelete('cascade');

            $table->foreign('varsen_id')
                  ->references('id')
                  ->on('varsens')->onDelete('cascade');

            $table->string('dato');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
