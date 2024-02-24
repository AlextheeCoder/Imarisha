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
        Schema::create('inputs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            
            // Input Types
            $table->json('seed_types')->nullable(); // E.g., "Maize, Beans, Vegetables, Specialty Crops"
            $table->json('fertilizers')->nullable(); // Organic, Chemical, specific formulas (NPK)
            $table->json('pesticides')->nullable(); // Type (Herbicides, Insecticides), Bio-control options
            $table->json('farming_equipment')->nullable();  // Heavy machinery, Gardening tools, Workshop tools, Livestock equipment, spare part
            $table->string('equipment_provision')->nullable();  // Sales, rentals , 
        
            // Other Considerations
            $table->string('delivery_options')->nullable(); // To farm, collection points 
            $table->text('additional_services')->nullable(); // Any additional services being offered

            $table->timestamps();

            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputs');
    }
};
