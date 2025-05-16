<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curriculum extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'curriculums';

    protected $fillable = [
        'user_id',
        'cv_path',
        'model',
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
    public function experience(){
        return $this->hasMany(Experience::class);
    }
    public function formation(){
        return $this->hasMany(Formation::class);
    }
}
