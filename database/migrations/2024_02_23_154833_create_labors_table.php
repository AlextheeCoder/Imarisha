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
        Schema::create('labors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
             // Type of Labor Provided
            $table->string('skill_levels')->nullable(); // "Unskilled", "Semi-skilled", "Skilled" , none
            $table->string('specializations')->nullable(); // "Planting", "Harvesting", "Livestock Care", "Equipment Operation", none

            // Contract and Availability
            $table->string('contract_types')->nullable(); // "Daily", "Weekly", "Seasonal", "Task-based",none
            $table->string('availability')->default('Immediate'); 

            // Pricing
            $table->string('pricing_model')->nullable(); // "Hourly", "Daily", "Per-Task", "Negotiable",none

            // Other Considerations 
            $table->boolean('verified')->default(false); // Has the provider verified these workers?
            $table->text('additional_info')->nullable(); // Free-form for other details


            $table->timestamps();
           

            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labors');
    }
};
