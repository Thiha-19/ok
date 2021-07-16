<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_name',
        'email',
        'dob',
        'postal',
        'phone',
        'prior_exp',
        'add_info',
        'expected_salary',
        'education_id'
    ];

    public function recruitments(): BelongsTo
    {
        return $this->belongsTo(Recruitment::class,);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class,);
    }
}
