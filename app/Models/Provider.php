<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'organization_name',
        'website',
        'about',
        'type',
        'target_profile',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
