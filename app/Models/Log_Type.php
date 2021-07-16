<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_Type extends Model
{
    use HasFactory;

    
    public function log_types(): HasMany
    {
        return $this->hasMany(Log_Type::class,);
    }
}
