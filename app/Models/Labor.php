<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'skill_levels',
        'specializations',
        'contract_types',
        'availability',
        'pricing_model',
        'verified',
        'additional_info',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
