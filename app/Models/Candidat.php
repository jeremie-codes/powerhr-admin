<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidat extends Model
{
    use HasFactory;
    protected $table = 'candidates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'SkillSet', 'HighestQualificationHeld', 'ExperienceDetails', 'user_id', 'salary'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
