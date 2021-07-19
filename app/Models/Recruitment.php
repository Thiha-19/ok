<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_of_positions', 'start_date', 'end_date', 'description', 'role_id', 'department_id', 'recruitment_id'
    ];


    public function roles(): BelongsTo
    {
        return $this->belongsTo(Role::class,);
    }

    public function departments(): BelongsTo
    {
        return $this->belongsTo(Department::class,);
    }

    public function candidates(): HasMany
    {
        return $this->hasMany(candidate::class,);
    }

}
