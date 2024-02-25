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
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');

                // Type of Market Access
            $table->string('market_channels')->nullable(); // "Direct to Consumer", "Cooperatives", "Retailers", "Wholesalers", "Export"

            // Specialization
            $table->json('target_crops')->nullable(); // Specific crops the provider focuses on
            $table->json('target_livestock')->nullable(); // Specific Livestock the provider focuses on
            $table->string('value_addition')->nullable(); // "Processing", "Packaging", "Branding" (If offered)

            // Logistics and Pricing
            $table->string('transport_provided')->default(false); 
            $table->string('pricing_models')->nullable(); // "Fixed Price", "Negotiated", "Market-Linked"

            // Additional Considerations
            $table->text('quality_standards')->nullable(); // Certifications, specific requirements
            $table->text('contract_terms')->nullable(); // If they work with formal contracts

            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markets');
    }
};
