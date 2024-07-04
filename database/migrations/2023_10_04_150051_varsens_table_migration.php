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
        
        Schema::create('varsens', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->bigInteger('sensor_id')->unsigned();
            $table->bigInteger('variable_id')->unsigned();            
            $table->smallInteger('indice')->nullable();
            
            $table->foreign('sensor_id')
                  ->references('id')
                  ->on('sensores')->onDelete('cascade');

            $table->foreign('variable_id')
                  ->references('id')
                  ->on('variables')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varsens');
    }
};
