<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personne extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nom', 'postNom', 'prenom', 'dateNaissance', 'sexe', 'nationalite', 'adresse', 'codePostal', 'ville', 'telephone',
        'user_id',
        'matricule',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
