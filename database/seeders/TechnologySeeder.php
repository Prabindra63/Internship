<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    public function run(): void
    {
        $technologies = [
            ['name' => 'PHP', 'slug' => 'php', 'icon' => null, 'category' => 'Backend', 'description' => 'Popular general-purpose scripting language for web development.', 'status' => true, 'sort_order' => 1],
            ['name' => 'Laravel', 'slug' => 'laravel', 'icon' => null, 'category' => 'Backend', 'description' => 'Elegant PHP web application framework with expressive syntax.', 'status' => true, 'sort_order' => 2],
            ['name' => 'JavaScript', 'slug' => 'javascript', 'icon' => null, 'category' => 'Frontend', 'description' => 'High-level programming language for web interactivity.', 'status' => true, 'sort_order' => 3],
            ['name' => 'React', 'slug' => 'react', 'icon' => null, 'category' => 'Frontend', 'description' => 'Component-based library for building user interfaces.', 'status' => true, 'sort_order' => 4],
            ['name' => 'Vue.js', 'slug' => 'vuejs', 'icon' => null, 'category' => 'Frontend', 'description' => 'Progressive framework for building user interfaces.', 'status' => true, 'sort_order' => 5],
            ['name' => 'Node.js', 'slug' => 'nodejs', 'icon' => null, 'category' => 'Backend', 'description' => 'JavaScript runtime for server-side development.', 'status' => true, 'sort_order' => 6],
            ['name' => 'Python', 'slug' => 'python', 'icon' => null, 'category' => 'Backend', 'description' => 'Versatile programming language for various applications.', 'status' => true, 'sort_order' => 7],
            ['name' => 'PostgreSQL', 'slug' => 'postgresql', 'icon' => null, 'category' => 'Database', 'description' => 'Advanced open-source relational database system.', 'status' => true, 'sort_order' => 8],
            ['name' => 'MySQL', 'slug' => 'mysql', 'icon' => null, 'category' => 'Database', 'description' => 'Popular open-source relational database management system.', 'status' => true, 'sort_order' => 9],
            ['name' => 'Docker', 'slug' => 'docker', 'icon' => null, 'category' => 'DevOps', 'description' => 'Platform for containerizing and deploying applications.', 'status' => true, 'sort_order' => 10],
        ];

        foreach ($technologies as $tech) {
            Technology::create($tech);
        }
    }
}
