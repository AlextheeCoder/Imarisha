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
        Schema::create('financials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');

            // Financing Products
            $table->string('loan_types')->nullable();  // E.g., "Microloans, Equipment Financing, Seasonal Loans"
            $table->double('interest_rates')->nullable(); 
            $table->string('repayment_terms')->nullable(); // E.g., "Weekly, Monthly, Flexible"
            $table->text('eligibility_criteria')->nullable(); 

            // Other Financial Services
            $table->string('savings_products')->nullable(); // Types of accounts
            $table->string('insurance_offered')->nullable(); // Crop insurance, etc.

            $table->timestamps();

            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financials');
    }
};
