<?php

use App\Models\Category;
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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->foreignIdFor(Category::class);
            $table->string('title');
            $table->text('description');
            $table->integer('salary');
            $table->string('matricule')->unique();
            $table->string('location');
            $table->string('duration')->nullable();
            $table->string('work_type')->nullable();
            $table->string('contract_type')->nullable();
            $table->boolean('is_current')->default(false);
            $table->boolean('is_open')->default(false);
            $table->string('skills')->nullable();
            $table->date('available_until')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
