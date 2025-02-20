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
        Schema::create('cohetes', function (Blueprint $table) {
            $table->id();
            $table->string('id_equipo');
            $table->double('peso');
            $table->double('tamano_cohete');
            $table->double('cap_botella');
            $table->double('can_agua');
            $table->double('can_psi');
            $table->double('tiempo');
            $table->double('altu_es');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cohetes');
    }
};
