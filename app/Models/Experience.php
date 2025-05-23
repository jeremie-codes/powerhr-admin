<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'curriculum_id',
        'job_title',
        'start_date',
        'end_date',
        'company',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function curriculum(){
        return $this->belongsTo(Curriculum::class);
    }
}
