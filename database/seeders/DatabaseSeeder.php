<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Todo;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin12345'), 
            'remember_token' => Str::random(10), 
            'is_admin' => true,
        ]);

        User::factory(101)->create(); //100 user
        Todo::factory(500)->create(); //500 todo
    }
    public function boot(): void
    {
        Paginator::useTailwind();
        Gate::define('admin', function ($user){
            return $user->is_admin == true;
        });
    }
}