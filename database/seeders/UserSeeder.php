<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing users first to avoid duplicate key errors
        // Use DELETE instead of TRUNCATE to avoid foreign key constraint issues
        DB::table('users')->delete();
        
        // Reset auto increment
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        
        // Read the SQL file and execute it
        $sql = File::get(database_path('seeders/users_data.sql'));
        
        // Execute the SQL statement
        DB::statement($sql);
        
        $this->command->info('Users seeded successfully!');
    }
}