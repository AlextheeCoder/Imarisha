<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;


    protected $fillable = [
        'provider_id',
        'market_channels',
        'value_addition',
        'transport_provided',
        'pricing_models',
        'quality_standards',
        'contract_terms',
        'target_crops',
        'target_livestock',
        
    ];

    protected $casts = [
        
        'target_crops' => 'json',
        'target_livestock' => 'json',

    ];


    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
