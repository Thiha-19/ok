<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave_Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason',
        'startdate',
        'enddate',
        'addinfo',
        'employee_id',
        'approval_id'
    ];

    
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    public function approvals(): BelongsTo
    {
        return $this->belongsTo(Approval::class,);
    }

}
