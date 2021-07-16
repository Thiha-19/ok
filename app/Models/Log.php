<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    public function log_types(): BelongsTo
    {
        return $this->belongsTo(Log_Type::class,);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }
}
