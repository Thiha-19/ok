<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'communication',
        'teamwork',
        'execution',
        'adaptability',
        'courage',
        'date',
        'addinfo',
        'employee_id'
    ];

  
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
