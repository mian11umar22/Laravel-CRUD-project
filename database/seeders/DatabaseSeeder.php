<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Student;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Contact::factory()->count(10)->create();
        Student::factory()->count(15)->create();
        
    }   
}
