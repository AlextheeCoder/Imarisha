<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'farm_type',
        'land_size',
        'regenerative_practice',
        'farming_challenges',
        'soil_quality',
        'irrigation_access',
        'water_source',
        'soil_improvement_techniques',
    ];

    protected $casts = [
        'farming_challenges' => 'json',
        'soil_improvement_techniques' => 'json',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
