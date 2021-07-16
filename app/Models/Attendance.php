<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    public function attendance_types(): BelongsTo
    {
        return $this->belongsTo(Attendance_Type::class,);
    }
}
