<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BCategory;

class BCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        BCategory::insert([
            [
                'name' => 'Web Development',
                'description' => 'All blogs related to web development technologies and frameworks.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile Development',
                'description' => 'Blogs about mobile apps, Flutter, React Native, and Android/iOS development.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Science',
                'description' => 'Articles covering AI, Machine Learning, Data Analysis, and related topics.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DevOps',
                'description' => 'Blogs about DevOps, CI/CD pipelines, and cloud deployment techniques.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cybersecurity',
                'description' => 'Articles and tutorials about cybersecurity best practices and tools.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
