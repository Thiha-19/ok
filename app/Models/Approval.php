<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    
    public function leave_requests(): HasMany
    {
        return $this->hasMany(Leave_Request::class, 'foreign_key', 'local_key');
    }
}
