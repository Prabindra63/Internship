<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'category_id' => 1, 'author_id' => 1,
                'title' => 'The Future of Web Development in 2026',
                'slug' => 'future-of-web-development-2026',
                'excerpt' => 'Explore the latest trends shaping web development in 2026, from AI integration to edge computing.',
                'content' => "The web development landscape continues to evolve at a rapid pace. As we move through 2026, several key trends are shaping how we build and deploy web applications.\n\n## AI-Powered Development\n\nArtificial intelligence is becoming an integral part of the development workflow. From code generation to automated testing, AI tools are helping developers work more efficiently.\n\n## Edge Computing\n\nEdge computing is revolutionizing how we handle data processing, bringing computation closer to users for faster response times and better user experiences.\n\n## WebAssembly\n\nWebAssembly continues to gain traction, enabling high-performance applications in the browser that were previously only possible with native code.\n\n## Conclusion\n\nStaying current with these trends is essential for developers who want to build modern, performant web applications.",
                'status' => true, 'published_at' => '2026-01-15 10:00:00',
                'meta_title' => 'The Future of Web Development in 2026',
                'meta_description' => 'Explore the latest trends shaping web development in 2026.',
            ],
            [
                'category_id' => 2, 'author_id' => 1,
                'title' => 'Why Laravel Remains the Top PHP Framework',
                'slug' => 'why-laravel-remains-top-php-framework',
                'excerpt' => 'Discover why Laravel continues to dominate the PHP ecosystem with its elegant syntax and powerful features.',
                'content' => "Laravel has been the go-to PHP framework for years, and for good reason. Its elegant syntax, robust feature set, and vibrant community make it the top choice for web developers.\n\n## Ecosystem\n\nLaravel's ecosystem includes tools like Laravel Forge, Vapor, Horizon, and Echo that make deployment and management seamless.\n\n## Community\n\nThe Laravel community is one of the most active and supportive in the programming world, with extensive documentation, tutorials, and packages.\n\n## Performance\n\nWith Laravel 12's improvements in performance and scalability, it remains an excellent choice for projects of all sizes.",
                'status' => true, 'published_at' => '2026-01-10 10:00:00',
                'meta_title' => 'Why Laravel Remains the Top PHP Framework in 2026',
                'meta_description' => 'Discover why Laravel continues to dominate the PHP ecosystem.',
            ],
            [
                'category_id' => 1, 'author_id' => 1,
                'title' => 'Understanding PostgreSQL Performance Tuning',
                'slug' => 'understanding-postgresql-performance-tuning',
                'excerpt' => 'Learn essential PostgreSQL performance tuning techniques to optimize your database queries.',
                'content' => "PostgreSQL is a powerful database system, but like any tool, it requires proper configuration and tuning for optimal performance.\n\n## Indexing Strategies\n\nProper indexing is crucial for query performance. Learn about B-tree, Hash, GIN, and GiST indexes.\n\n## Query Optimization\n\nUse EXPLAIN ANALYZE to understand query execution plans and identify bottlenecks.\n\n## Configuration Tuning\n\nAdjust PostgreSQL configuration parameters like shared_buffers, work_mem, and effective_cache_size for better performance.",
                'status' => true, 'published_at' => '2026-01-05 10:00:00',
                'meta_title' => 'PostgreSQL Performance Tuning Guide',
                'meta_description' => 'Learn essential PostgreSQL performance tuning techniques.',
            ],
            [
                'category_id' => 3, 'author_id' => 1,
                'title' => 'React Native vs Flutter: Which One to Choose?',
                'slug' => 'react-native-vs-flutter',
                'excerpt' => 'A comprehensive comparison of React Native and Flutter for cross-platform mobile development.',
                'content' => "Choosing between React Native and Flutter depends on your project requirements, team expertise, and long-term goals.\n\n## React Native\n\nReact Native allows you to build mobile apps using JavaScript and React. It has a mature ecosystem and large community.\n\n## Flutter\n\nFlutter uses Dart and provides a rich set of pre-built widgets for creating beautiful native interfaces.\n\n## Comparison\n\nBoth frameworks have their strengths. React Native is great for web developers transitioning to mobile, while Flutter offers better performance and consistent UI across platforms.",
                'status' => true, 'published_at' => '2025-12-20 10:00:00',
                'meta_title' => 'React Native vs Flutter: Comprehensive Comparison',
                'meta_description' => 'Compare React Native and Flutter for cross-platform mobile development.',
            ],
            [
                'category_id' => 4, 'author_id' => 1,
                'title' => 'Implementing CI/CD with GitHub Actions',
                'slug' => 'implementing-cicd-github-actions',
                'excerpt' => 'A step-by-step guide to setting up continuous integration and deployment with GitHub Actions.',
                'content' => "GitHub Actions makes it easy to automate your software development workflows. Here's how to set up CI/CD for your projects.\n\n## Getting Started\n\nCreate a workflow file in .github/workflows directory to define your automation pipeline.\n\n## Building and Testing\n\nConfigure your workflow to install dependencies, run tests, and build your application.\n\n## Deployment\n\nSet up automatic deployment to your hosting platform when changes are pushed to the main branch.",
                'status' => true, 'published_at' => '2025-12-15 10:00:00',
                'meta_title' => 'CI/CD with GitHub Actions - Step by Step Guide',
                'meta_description' => 'Learn to set up continuous integration and deployment with GitHub Actions.',
            ],
            [
                'category_id' => 5, 'author_id' => 1,
                'title' => 'Our Company Milestones in 2025',
                'slug' => 'company-milestones-2025',
                'excerpt' => 'Reflecting on our achievements and growth throughout 2025.',
                'content' => "2025 was a remarkable year for our company. We achieved several significant milestones that have positioned us for even greater success.\n\n## Growth\n\nWe expanded our team with talented professionals across multiple disciplines.\n\n## Projects\n\nWe successfully delivered over 20 projects for clients across various industries.\n\n## Recognition\n\nOur work was recognized with industry awards and positive client feedback.\n\n## Looking Forward\n\nAs we move into 2026, we are excited about the opportunities ahead and remain committed to delivering excellence.",
                'status' => true, 'published_at' => '2025-12-28 10:00:00',
                'meta_title' => 'Company Milestones in 2025',
                'meta_description' => 'Reflecting on our achievements and growth throughout 2025.',
            ],
            [
                'category_id' => 2, 'author_id' => 1,
                'title' => 'Building RESTful APIs with Laravel',
                'slug' => 'building-restful-apis-laravel',
                'excerpt' => 'Learn how to build robust and secure RESTful APIs using Laravel\'s powerful features.',
                'content' => "Laravel makes building RESTful APIs a breeze with its built-in features and elegant syntax.\n\n## API Resources\n\nUse Laravel's API resource classes to transform your models into JSON responses.\n\n## Authentication\n\nImplement API authentication using Laravel Sanctum or Passport for secure access.\n\n## Validation\n\nUse Form Requests to validate incoming API requests with clean, reusable validation logic.\n\n## Rate Limiting\n\nProtect your API from abuse using Laravel's built-in rate limiting middleware.",
                'status' => true, 'published_at' => '2025-11-30 10:00:00',
                'meta_title' => 'Building RESTful APIs with Laravel - Complete Guide',
                'meta_description' => 'Learn to build robust RESTful APIs using Laravel.',
            ],
            [
                'category_id' => 4, 'author_id' => 1,
                'title' => 'Docker for Laravel Development',
                'slug' => 'docker-for-laravel-development',
                'excerpt' => 'Simplify your Laravel development environment with Docker containers.',
                'content' => "Docker provides consistent development environments that eliminate the \"it works on my machine\" problem.\n\n## Why Docker?\n\nDocker ensures that all team members use the same environment, reducing configuration issues.\n\n## Setup\n\nUse Docker Compose to define your Laravel application services including web server, database, and cache.\n\n## Best Practices\n\nFollow Docker best practices for Laravel including multi-stage builds and proper volume management.",
                'status' => true, 'published_at' => '2025-11-20 10:00:00',
                'meta_title' => 'Docker for Laravel Development - Complete Setup Guide',
                'meta_description' => 'Simplify your Laravel development environment with Docker containers.',
            ],
            [
                'category_id' => 3, 'author_id' => 1,
                'title' => 'The Rise of Progressive Web Apps',
                'slug' => 'rise-of-progressive-web-apps',
                'excerpt' => 'Why PWAs are becoming the preferred choice for businesses looking to reach users across platforms.',
                'content' => "Progressive Web Apps (PWAs) combine the best of web and mobile apps, offering offline support, push notifications, and fast loading times.\n\n## Benefits\n\nPWAs are cheaper to develop than native apps and offer a similar user experience.\n\n## Features\n\nService workers enable offline functionality, while web app manifests allow installation on home screens.\n\n## Performance\n\nPWAs load quickly even on slow networks, providing a smooth user experience.",
                'status' => true, 'published_at' => '2025-11-10 10:00:00',
                'meta_title' => 'The Rise of Progressive Web Apps (PWAs)',
                'meta_description' => 'Why PWAs are becoming the preferred choice for businesses.',
            ],
            [
                'category_id' => 1, 'author_id' => 1,
                'title' => 'Securing Your Web Application',
                'slug' => 'securing-your-web-application',
                'excerpt' => 'Essential security practices every web developer should follow to protect their applications.',
                'content' => "Web application security should be a top priority for every developer. Here are essential practices to follow.\n\n## Input Validation\n\nAlways validate and sanitize user input to prevent injection attacks.\n\n## Authentication\n\nImplement strong authentication with proper password hashing and session management.\n\n## HTTPS\n\nAlways use HTTPS to encrypt data in transit between clients and your server.\n\n## Regular Updates\n\nKeep your dependencies and frameworks updated to patch known vulnerabilities.",
                'status' => true, 'published_at' => '2025-10-25 10:00:00',
                'meta_title' => 'Web Application Security Best Practices',
                'meta_description' => 'Essential security practices for web developers.',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
