<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'startdate',
        'enddate',
        'description',
        'tutor_id'
    ];

    public function tutors(): BelongsTo
    {
        return $this->belongsTo(Tutor::class,);
    }

    public function training_employees(): HasMany
    {
        return $this->hasMany(Training_Employees::class,);
    }
}
