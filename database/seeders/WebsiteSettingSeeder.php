<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;

class WebsiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'company_name', 'value' => 'TechNova Solutions'],
            ['key' => 'email', 'value' => 'info@technova.com'],
            ['key' => 'phone', 'value' => '+977 1-4XXXXXX'],
            ['key' => 'address', 'value' => 'Kathmandu, Nepal'],
            ['key' => 'footer_description', 'value' => 'We are a technology company dedicated to providing innovative digital solutions that help businesses succeed in the modern digital landscape.'],
            ['key' => 'copyright_text', 'value' => '© '.date('Y').' TechNova Solutions. All rights reserved.'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com'],
            ['key' => 'github_url', 'value' => 'https://github.com'],
            ['key' => 'youtube_url', 'value' => 'https://youtube.com'],
        ];

        foreach ($settings as $setting) {
            WebsiteSetting::create($setting);
        }
    }
}
