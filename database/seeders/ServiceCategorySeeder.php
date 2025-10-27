<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SerivceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title'       => 'Web Services',
                'description' => 'All types of web development and hosting related services.',
                'image'       => null,  
                'icon'        => 'fa-solid fa-code',
                'order'       => 1,
                'status'      => 1,
            ],
            [
                'title'       => 'Mobile Services',
                'description' => 'Android and iOS mobile app development  and user-friendly solutions.',
                'image'       => null,
                'icon'        => 'fa-solid fa-mobile-screen-button',
                'order'       => 2,
                'status'      => 1,
            ],
            [
                'title'       => 'Marketing',
                'description' => 'Digital marketing, SEO, and social media services.',
                'image'       => null,
                'icon'        => 'fa-solid fa-bullhorn',
                'order'       => 3,
                'status'      => 1,
            ],
            [
                'title'       => 'Design',
                'description' => 'UI/UX design, graphic design, and branding services.',
                'image'       => null,
                'icon'        => 'fa-solid fa-paintbrush',
                'order'       => 4,
                'status'      => 1, // Inactive
            ],
        ];

        foreach ($categories as $category) {
            SerivceCategory::create($category);
        }
    }
}
