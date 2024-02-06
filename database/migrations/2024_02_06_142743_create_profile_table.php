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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('farm_type');
            $table->string('land_size');
            $table->json('soil_improvement_techniques');
            $table->string('regenerative_practice');
            $table->json('farming_challenges');
            $table->string('soil_quality');
            $table->string('irrigation_access');
            $table->string('water_source');
            $table->string('interest_training');
            $table->json('training_areas');
            $table->string('pay_for_training');
            $table->string('join_digital_platform');
            $table->string('find_operators');
            $table->string('upskill_operators');
            $table->string('farm_operation');
            $table->string('record_keeping');
            $table->string('profitability_analysis');
            $table->string('long_term_strategy');
            $table->json('sources_of_finance');
            $table->string('borrowing_habits');
            $table->json('finance_access_challenges');
            $table->json('sales_channels');
            $table->string('market_reliability');
            $table->json('selling_challenges');
            $table->json('current_crops');
            $table->string('interest_new_crops');
            $table->json('crop_choice_constraints');
            $table->json('current_livestock');
            $table->string('interest_livestock_farming');
            $table->json('livestock_farming_challenges');
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
        Schema::dropIfExists('profile');
    }
};
