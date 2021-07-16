<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name','email','location','description'
    ];


    public function employee_departments(): HasManyThrough
    {
        return $this->hasManyThrough(Employee_Department::class,);
    }

    public function recruitments(): HasManyThrough
    {
        return $this->hasManyThrough(Recruitment::class,);
    }
}
