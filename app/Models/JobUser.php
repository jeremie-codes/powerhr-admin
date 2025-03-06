<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'user_id', 'job_id', 'is_active', 'matricule','client_approved_at',
        'user_approved_at', 'client_rejected_at', 'user_rejected_at'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'client_approved_at' => 'datetime',
        'user_approved_at' => 'datetime',
        'client_rejected_at' => 'datetime',
        'user_rejected_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class)->with('user');
    }
}
