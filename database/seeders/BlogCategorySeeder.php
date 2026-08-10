<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology', 'description' => 'Latest technology trends and insights.'],
            ['name' => 'Web Development', 'slug' => 'web-development', 'description' => 'Tips and tutorials on web development.'],
            ['name' => 'Mobile Development', 'slug' => 'mobile-development', 'description' => 'Mobile app development best practices.'],
            ['name' => 'DevOps', 'slug' => 'devops', 'description' => 'DevOps practices and tools.'],
            ['name' => 'Company News', 'slug' => 'company-news', 'description' => 'Updates and news from our company.'],
        ];

        foreach ($categories as $category) {
            BlogCategory::create($category);
        }
    }
}
