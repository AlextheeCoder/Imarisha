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
        'soil_improvement_techniques',
        'regenerative_practice',
        'farming_challenges',
        'soil_quality',
        'irrigation_access',
        'water_source',
        'interest_training',
        'training_areas',
        'pay_for_training',
        'join_digital_platform',
        'find_operators',
        'upskill_operators',
        'farm_operation',
        'record_keeping',
        'profitability_analysis',
        'long_term_strategy',
        'sources_of_finance',
        'borrowing_habits',
        'finance_access_challenges',
        'sales_channels',
        'market_reliability',
        'selling_challenges',
        'current_crops',
        'interest_new_crops',
        'crop_choice_constraints',
        'current_livestock',
        'interest_livestock_farming',
        'livestock_farming_challenges',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
