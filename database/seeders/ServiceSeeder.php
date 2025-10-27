<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\SerivceCategory;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $service_categories = SerivceCategory::all();

        Service::insert([
            // ================= Web Services =================
            [
                'title' => 'Custom Website Development',
                'sub_title' => 'Dynamic & Static Websites',
                'description' => 'We create business websites, portfolios, and e-commerce stores.',
                'other_description' => 'Using Laravel, WordPress, and PHP.',
                'icon' => 'fa fa-globe',
                'banner_image' => 'uploads/service/banner/web1.jpg',
                'thumbnail' => 'uploads/service/thumbnail/web1.jpg',
                'order_no' => 1,
                'status' => 1,
                'category_id' => 1, // Web Services
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'E-Commerce Solutions',
                'sub_title' => 'Online Stores',
                'description' => 'We build secure and scalable e-commerce platforms.',
                'other_description' => 'Payment gateways, product management, and orders.',
                'icon' => 'fa fa-shopping-cart',
                'banner_image' => 'uploads/service/banner/web2.jpg',
                'thumbnail' => 'uploads/service/thumbnail/web2.jpg',
                'order_no' => 2,
                'status' => 1,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'CMS Development',
                'sub_title' => 'Custom Content Management',
                'description' => 'We develop content management systems for easy updates.',
                'other_description' => 'Custom CMS or WordPress solutions.',
                'icon' => 'fa fa-database',
                'banner_image' => 'uploads/service/banner/web3.jpg',
                'thumbnail' => 'uploads/service/thumbnail/web3.jpg',
                'order_no' => 3,
                'status' => 1,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ================= Mobile Services =================
            [
                'title' => 'Android App Development',
                'sub_title' => 'Native Android Apps',
                'description' => 'We build fast and optimized Android applications.',
                'other_description' => 'Java, Kotlin, and Flutter.',
                'icon' => 'fa fa-android',
                'banner_image' => 'uploads/service/banner/mobile1.jpg',
                'thumbnail' => 'uploads/service/thumbnail/mobile1.jpg',
                'order_no' => 1,
                'status' => 1,
                'category_id' => 2, // Mobile Services
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'iOS App Development',
                'sub_title' => 'iPhone & iPad Apps',
                'description' => 'We design and develop iOS apps with smooth UI/UX.',
                'other_description' => 'Swift, Objective-C, Flutter.',
                'icon' => 'fa fa-apple',
                'banner_image' => 'uploads/service/banner/mobile2.jpg',
                'thumbnail' => 'uploads/service/thumbnail/mobile2.jpg',
                'order_no' => 2,
                'status' => 1,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cross-Platform Apps',
                'sub_title' => 'Flutter & React Native',
                'description' => 'We create apps that run on both iOS and Android.',
                'other_description' => 'Single codebase, high performance.',
                'icon' => 'fa fa-mobile',
                'banner_image' => 'uploads/service/banner/mobile3.jpg',
                'thumbnail' => 'uploads/service/thumbnail/mobile3.jpg',
                'order_no' => 3,
                'status' => 1,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ================= Marketing =================
            [
                'title' => 'SEO Optimization',
                'sub_title' => 'Rank Higher on Google',
                'description' => 'We improve your website ranking with SEO strategies.',
                'other_description' => 'On-page, off-page, and technical SEO.',
                'icon' => 'fa fa-search',
                'banner_image' => 'uploads/service/banner/marketing1.jpg',
                'thumbnail' => 'uploads/service/thumbnail/marketing1.jpg',
                'order_no' => 1,
                'status' => 1,
                'category_id' => 3, // Marketing
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Social Media Marketing',
                'sub_title' => 'Facebook, Instagram, LinkedIn',
                'description' => 'We manage social media campaigns to increase engagement.',
                'other_description' => 'Content creation and paid ads.',
                'icon' => 'fa fa-facebook',
                'banner_image' => 'uploads/service/banner/marketing2.jpg',
                'thumbnail' => 'uploads/service/thumbnail/marketing2.jpg',
                'order_no' => 2,
                'status' => 1,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Email Marketing',
                'sub_title' => 'Reach Your Audience',
                'description' => 'We create and manage email marketing campaigns.',
                'other_description' => 'Newsletters, promotions, and automation.',
                'icon' => 'fa fa-envelope',
                'banner_image' => 'uploads/service/banner/marketing3.jpg',
                'thumbnail' => 'uploads/service/thumbnail/marketing3.jpg',
                'order_no' => 3,
                'status' => 1,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // ================= Design =================
            [
                'title' => 'Graphic Design',
                'sub_title' => 'Logos, Banners, Flyers',
                'description' => 'We design creative and eye-catching graphics.',
                'other_description' => 'Corporate branding and visuals.',
                'icon' => 'fa fa-image',
                'banner_image' => 'uploads/service/banner/design1.jpg',
                'thumbnail' => 'uploads/service/thumbnail/design1.jpg',
                'order_no' => 1,
                'status' => 1,
                'category_id' => 4, // Design
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Design',
                'sub_title' => 'Web & Mobile',
                'description' => 'We design user-friendly interfaces for web & apps.',
                'other_description' => 'Wireframes and prototypes included.',
                'icon' => 'fa fa-desktop',
                'banner_image' => 'uploads/service/banner/design2.jpg',
                'thumbnail' => 'uploads/service/thumbnail/design2.jpg',
                'order_no' => 2,
                'status' => 1,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Brand Identity Design',
                'sub_title' => 'Logos & Branding',
                'description' => 'We create professional brand identities.',
                'other_description' => 'Logo, typography, and color palette.',
                'icon' => 'fa fa-id-badge',
                'banner_image' => 'uploads/service/banner/design3.jpg',
                'thumbnail' => 'uploads/service/thumbnail/design3.jpg',
                'order_no' => 3,
                'status' => 1,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
