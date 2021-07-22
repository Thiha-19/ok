<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id', 'department_id', 'employee_id'
    ];


    public function employees(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    public function roles(): BelongsTo
    {
        return $this->belongsTo(Role::class,);
    }

    public function departments(): BelongsTo
    {
        return $this->belongsTo(Department::class,);
    }

}
