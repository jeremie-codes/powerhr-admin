<?php

use App\Models\Job;
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
        Schema::create('job_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Job::class);
            $table->boolean('is_active')->default(false);
            $table->string('matricule');
            $table->dateTime('client_approved_at')->nullable();
            $table->dateTime('user_approved_at')->nullable();
            $table->dateTime('client_rejected_at')->nullable();
            $table->dateTime('user_rejected_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_users');
    }
};
