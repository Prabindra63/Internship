<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Aarav Thapa', 'position' => 'CEO & Founder', 'biography' => 'Visionary leader with over 15 years of experience in the technology industry. Passionate about driving digital transformation and building innovative solutions.', 'email' => 'aarav@example.com', 'linkedin_url' => 'https://linkedin.com', 'github_url' => 'https://github.com', 'sort_order' => 1, 'status' => true],
            ['name' => 'Sita Rai', 'position' => 'CTO', 'biography' => 'Technical expert specializing in software architecture and cloud infrastructure. Leads our engineering team to deliver high-quality solutions.', 'email' => 'sita@example.com', 'linkedin_url' => 'https://linkedin.com', 'github_url' => 'https://github.com', 'sort_order' => 2, 'status' => true],
            ['name' => 'Kiran Sharma', 'position' => 'Lead Developer', 'biography' => 'Full-stack developer with expertise in Laravel, React, and modern web technologies. Passionate about clean code and best practices.', 'email' => 'kiran@example.com', 'linkedin_url' => 'https://linkedin.com', 'github_url' => 'https://github.com', 'sort_order' => 3, 'status' => true],
            ['name' => 'Maya Gurung', 'position' => 'UI/UX Designer', 'biography' => 'Creative designer with a keen eye for detail. Specializes in creating intuitive and engaging user experiences.', 'email' => 'maya@example.com', 'linkedin_url' => 'https://linkedin.com', 'github_url' => 'https://github.com', 'sort_order' => 4, 'status' => true],
            ['name' => 'Rohan Poudel', 'position' => 'DevOps Engineer', 'biography' => 'Cloud infrastructure and automation specialist. Ensures our deployments are smooth and our systems are reliable.', 'email' => 'rohan@example.com', 'linkedin_url' => 'https://linkedin.com', 'github_url' => 'https://github.com', 'sort_order' => 5, 'status' => true],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
