<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'age',
        'address',
        'phone',
        'experience',
        'addinfo',
        'education_id'
    ];

    public function trainings(): HasMany
    {
        return $this->hasMany(Training::class,);
    }
}
