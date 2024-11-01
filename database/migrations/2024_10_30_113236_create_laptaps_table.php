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
        Schema::create('laptaps', function (Blueprint $table) {
            $table->id();
            $table->string('name_lap_tap');
            $table->string('model');
            $table->string('price');
            $table->string('display_size');
            $table->string('ram');
            $table->string('storage');
            $table->string('cpu');
            $table->string('gpn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptaps');
    }
};
