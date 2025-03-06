<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('matricule')->unique();
            $table->string('nom');
            $table->string('postNom');
            $table->string('prenom');
            $table->date('dateNaissance');
            $table->string('sexe');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('codePostal');
            $table->string('ville');
            $table->string('telephone');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
