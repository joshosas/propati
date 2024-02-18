<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title/Name
            $table->text('description')->nullable(); // Description
            $table->decimal('price', 10, 2)->nullable(); // Price
            $table->string('city')->nullable(); // Location (City)
            $table->string('state')->nullable(); // Location (State)
            $table->string('zip_code')->nullable(); // Location (ZIP code)
            $table->integer('bedrooms')->nullable(); // Bedrooms
            $table->integer('bathrooms')->nullable(); // Bathrooms
            $table->integer('square_footage')->nullable(); // Square footage
            $table->integer('lot_size')->nullable(); // Lot size
            $table->integer('year_built')->nullable(); // Year built
            $table->string('property_type')->nullable(); // Property type
            $table->string('sale_rent')->nullable(); // Sale or  Rent
            $table->text('amenities')->nullable(); // Amenities
            $table->text('photos')->nullable(); // Photos (upload multiple photos)
            $table->string('contact_name')->nullable(); // Contact information (name)
            $table->string('contact_email')->nullable(); // Contact information (email)
            $table->string('contact_phone')->nullable(); // Contact information (phone number)
            $table->text('additional_details')->nullable(); // Additional details
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
