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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('farm_type');
            $table->string('land_size');
            $table->string('regenerative_practice');
            $table->json('farming_challenges')->nullable();
            $table->string('soil_quality');
            $table->string('irrigation_access');
            $table->string('water_source');
            $table->json('soil_improvement_techniques')->nullable();
            $table->timestamps();
            
            // Add foreign key constraint for user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
