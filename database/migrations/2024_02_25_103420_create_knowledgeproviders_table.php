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
        Schema::create('knowledgeproviders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');

                // Areas of Expertise
             $table->json('target_crops')->nullable(); // Specific crops the provider focuses on
             $table->json('target_livestock')->nullable(); // Specific Livestock the provider focuses on

            // Delivery Methods
            $table->json('delivery_methods')->nullable(); // "Workshops", "On-farm Consultations", "Webinars", "Digital Resources" 

       
           
            $table->string('pricing_models')->nullable(); // "Fixed Price", "Negotiated", "Market-Linked"
            // Credentials / Experience
            $table->text('credentials')->nullable();  // Certifications, affiliations, years of experience


            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledgeproviders');
    }
};
