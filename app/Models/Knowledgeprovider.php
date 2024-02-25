<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledgeprovider extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'pricing_models',
        'credentials',
        'target_crops',
        'target_livestock',
        'delivery_methods',
        
    ];

    protected $casts = [
        
        'target_crops' => 'json',
        'target_livestock' => 'json',
        'delivery_methods' => 'json',

    ];


    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }


}
