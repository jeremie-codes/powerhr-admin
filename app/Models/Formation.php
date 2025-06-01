<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'curriculum_id',
        'title',
        'start_date',
        'end_date',
        'school',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function curriculum(){
        return $this->belongsTo(Curriculum::class);
    }
}
