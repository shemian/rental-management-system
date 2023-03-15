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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->string('property_rent');
            $table->string('property_type');
            $table->integer('landlord_id');
            $table->string('property_sqmt');
            $table->string('property_agency_commission');
            $table->string('property_deposit');
            $table->string('property_prefix');
            $table->string('property_description');
            $table->string('property_location');
            $table->string('property_address');
            $table->string('property_city');
            $table->string('property_state');
            $table->string('property_postal');
            $table->string('property_notes');
            $table->string('property_age');
            $table->string('property_rooms');
            $table->string('property_bathrooms');
            $table->string('property_airconditioner')->nullable();
            $table->string('property_laundryroom')->nullable();
            $table->string('property_heating')->nullable();
            $table->string('property_balcony')->nullable();
            $table->string('property_gym')->nullable();
            $table->string('property_internet')->nullable();
            $table->string('property_garden')->nullable();
            $table->string('property_alarm')->nullable();
            $table->string('property_pool')->nullable();
            $table->string('property_petsallow')->nullable();
            $table->string('property_rooftop')->nullable();
            $table->string('property_images')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
