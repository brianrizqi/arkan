<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'linkedin_url',
        'portfolio_url',
        'cover_letter',
        'cv_path',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
