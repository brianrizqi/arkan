<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'type',
        'level',
        'work_mode',
        'reporting_to',
        'location',
        'description',
        'responsibilities',
        'requirements',
        'benefits',
        'closing_date',
    ];

    public function category()
    {
        return $this->belongsTo(CareerCategory::class, 'category_id');
    }
}
