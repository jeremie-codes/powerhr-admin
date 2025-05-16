<?php

use App\Models\Experience;
use App\Models\Formation;
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
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('cv_path')->nullable();
            $table->integer('model')->default(1);
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->string('lieunaissance')->nullable();
            $table->string('nationalité')->nullable();
            $table->string('etatcivil')->nullable();
            $table->string('adresse')->nullable();
            $table->json('competence')->nullable();
            $table->json('langue')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum');
    }
};
