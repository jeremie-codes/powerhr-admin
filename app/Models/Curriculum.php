<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curriculum extends Model
{
    use HasFactory, SoftDeletes;

        protected $fillable = [
        'user_id',
        'formation_id',
        'experience_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'birthday',
        'lieunaissance',
        'nationalité',
        'etatcivil',
        'adresse',
        'competence',
        'langue',
    ];

    protected $casts = [
        'competence' => 'array',
        'langue' => 'array'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
