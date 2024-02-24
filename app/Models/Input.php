<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;


    protected $fillable = [
        'provider_id',
        'equipment_provision',
        'delivery_options',
        'additional_services',
        'seed_types',
        'fertilizers',
        'pesticides',
        'farming_equipment',
        
    ];

    protected $casts = [
        
        'seed_types' => 'json',
        'fertilizers' => 'json',
        'pesticides' => 'json',
        'farming_equipment' => 'json',
        

    ];


    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
