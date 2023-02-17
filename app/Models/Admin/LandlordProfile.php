<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandlordProfile extends Model
{
    use HasFactory;
    protected $table='landlord_profiles';
    protected $fillables=[
        'name',
        'email',
        'phone',
        'id_number',
        'image_identity',
        'address',
        'bank_associated',
        'bank_account',
    ];
}
