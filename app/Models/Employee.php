<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'ename',
        'eaddress',
        'info',
        'candidate_id'
    ];

    public function candidates(): BelongsTo
    {
        return $this->belongsTo(candidate::class,);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class,);
    }

    public function employee_departments(): HasMany
    {
        return $this->hasMany(Employee_Department::class,);
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class,);
    }

    public function training_employees(): HasMany
    {
        return $this->hasMany(Training_Employee::class,);
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class,);
    }

    public function leave_requests(): HasMany
    {
        return $this->hasMany(Leave_Request::class,);
    }
}
