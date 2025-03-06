<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use App\Models\User;
use App\Models\Skill;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Personne;
use App\Models\Prospect;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Database\Factories\PersonneFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Edgard',
            'email' => 'edgard@powerhr.site',
            'password' => Hash::make('123Power#Hr')
        ]);


        Role::create(['name' => 'admin']);
        Role::create(['name' => 'candidate']);
        Role::create(['name' => 'employee']);
        Role::create(['name' => 'supervisor']);
        Role::create(['name' => 'customer']);
        // Create a user with a single role
        $user = User::factory()->withRoles('admin')->create();

        // Create a user with multiple roles
        $user = User::factory()->withRoles(['admin'])->create();

        // Create multiple users with the same role
        $users = User::factory(20)->withRoles('candidate')->create();
        $employees = User::factory(20)->withRoles('employee')->create();
        $customers = User::factory(10)->withRoles('customer')->create();


        Personne::factory(10)->create();
        Profile::factory(10)->create();


        Job::factory(10)->create();

        //Client::factory(10)->create();

        Prospect::factory(1)->create();
    }
}
