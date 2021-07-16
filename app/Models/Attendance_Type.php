<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance_Type extends Model
{
    use HasFactory;

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class,);
    }
}
