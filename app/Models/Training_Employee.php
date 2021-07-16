<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Employee extends Model
{
    use HasFactory;

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    public function trainings(): BelongsTo
    {
        return $this->belongsTo(Training::class,);
    }
}
