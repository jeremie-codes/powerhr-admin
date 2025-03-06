<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prospect extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'subject',
        'name',
        'phone',
        'message',
        'readen',
        'matricule'
    ];

    protected $casts = [
        'readen' => 'boolean',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
