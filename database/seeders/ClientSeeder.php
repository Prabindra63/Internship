<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['name' => 'Rajesh Sharma', 'company_name' => 'TechVentures Nepal', 'website_url' => 'https://example.com', 'description' => 'Technology venture company focusing on digital innovation.', 'status' => true, 'sort_order' => 1],
            ['name' => 'Anita KC', 'company_name' => 'Digital Solutions Pvt. Ltd.', 'website_url' => 'https://example.com', 'description' => 'Leading provider of digital transformation services.', 'status' => true, 'sort_order' => 2],
            ['name' => 'Sagar Thapa', 'company_name' => 'InnovateTech', 'website_url' => 'https://example.com', 'description' => 'Innovation-driven technology company.', 'status' => true, 'sort_order' => 3],
            ['name' => 'Priya Adhikari', 'company_name' => 'CloudBase Systems', 'website_url' => 'https://example.com', 'description' => 'Cloud infrastructure and solutions provider.', 'status' => true, 'sort_order' => 4],
            ['name' => 'Binod Poudel', 'company_name' => 'WebCraft Studio', 'website_url' => 'https://example.com', 'description' => 'Creative web design and development studio.', 'status' => true, 'sort_order' => 5],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
