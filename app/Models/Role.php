<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'roles', 'approx_salary', 'description'
    ];


    public function employee_departments(): HasMany
    {
        return $this->hasMany(Employee_Department::class,);
    }

    public function recruitments(): HasManyThrough
    {
        return $this->hasManyThrough(Recruitment::class,);
    }
}
