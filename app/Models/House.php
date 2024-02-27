<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'location', 'city', 'state', 'zip_code', 'bedrooms', 'bathrooms', 'square_footage', 'lot_size', 'year_built', 'property_type', 'sale_rent', 'amenities', 'image', 'contact_name', 'contact_email', 'contact_phone', 'additional_details'];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
