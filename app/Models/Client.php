<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'adress', 'activity', 'phone', 'logo', 'contact_name', 'contact_phone', 'contact_email', 'website', 'description', 'city',
        'country', 'user_id', 'profile_mail'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
