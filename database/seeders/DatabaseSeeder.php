<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            TechnologySeeder::class,
            TestimonialSeeder::class,
            ClientSeeder::class,
            BlogCategorySeeder::class,
            BlogPostSeeder::class,
            TeamMemberSeeder::class,
            WebsiteSettingSeeder::class,
        ]);
    }
}
