<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'loan_types',
        'interest_rates',
        'repayment_terms',
        'eligibility_criteria',
        'savings_products',
        'insurance_offered',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
