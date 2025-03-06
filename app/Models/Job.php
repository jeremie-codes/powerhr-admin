<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Job extends Model implements Viewable
{
    use HasFactory, SoftDeletes, InteractsWithViews;

    protected $fillable = [
        'title', 'description', 'salary', 'user_id', 'is_current',
        'is_open', 'skills', 'available_until', 'location',
        'duration', 'work_type', 'contract_type',
        'id_number', 'category_id',
    ];

    protected $casts = [
        'is_current' => 'boolean',
        'is_open' => 'boolean',
        'available_until' => 'date',
        //'skills' => 'array'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->with('customer');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function findMatchingUsers()
    {
        // Récupérer tous les utilisateurs avec leurs skills
        $jobSkills = $this->skills;
        if (is_string($jobSkills)) {
            $jobSkills = explode(',', $jobSkills);
        }
        
        $users = User::with('skills', 'personne','profile')
        ->whereHas('skills', function ($query) use ($jobSkills) {
            $query->whereIn('name', $jobSkills);
        })
        ->withCount([
            'skills as matching_skills_count' => function ($query) use ($jobSkills) {
                $query->whereIn('name', $jobSkills);
            }
        ])
        ->orderByDesc('matching_skills_count')
        ->get();

        return $users;
    }

    public function candidates()
    {
        return $this->hasMany(JobUser::class)->with('user');
    }
}
