<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table ='properties';
    protected $fillable =[
        'property_name',
        'property_rent',
        'property_type',
        'landlord_id',
        'property_sqmt',
        'property_agency_commission',
        'property_deposit',
        'property_prefix',
        'property_description',
        'property_location',
        'property_address',
        'property_city',
        'property_state',
        'property_postal',
        'property_notes',
        'property_age',
        'property_rooms',
        'property_bathrooms',
        'property_airconditioner',
        'property_laundryroom',
        'property_heating',
        'property_balcony',
        'property_gym',
        'property_internet',
        'property_garden',
        'property_alarm',
        'property_pool',
        'property_petsallow',
        'property_rooftop',
        'property_images'

    ];
}
