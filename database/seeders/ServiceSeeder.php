<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Software Development',
                'slug' => 'software-development',
                'short_description' => 'We develop innovative, scalable, and secure software to streamline operations and drive digital growth.',
                'description' => "Our software development services cover the entire development lifecycle. From initial consultation and requirement analysis to design, development, testing, and deployment, we deliver tailored solutions that meet your specific business needs.\n\nWe specialize in:\n\n- Custom Web Applications\n- Enterprise Software\n- API Development & Integration\n- Legacy System Modernization\n- Cloud-Based Solutions\n\nOur team uses modern development practices including Agile methodology, CI/CD pipelines, and test-driven development to ensure high-quality deliverables.",
                'icon' => 'bi bi-code-slash',
                'status' => true,
                'sort_order' => 1,
                'meta_title' => 'Software Development Services - Custom Software Solutions',
                'meta_description' => 'We develop innovative, scalable, and secure software solutions to streamline operations and drive digital growth.',
            ],
            [
                'title' => 'Web Development',
                'slug' => 'web-development',
                'short_description' => 'We create fast, secure, and user-friendly websites tailored to enhance your brand and drive business growth.',
                'description' => "Our web development team builds modern, responsive websites using the latest technologies. We focus on performance, accessibility, and user experience to create websites that not only look great but also deliver results.\n\nOur web development services include:\n\n- Custom Website Development\n- E-commerce Solutions\n- Content Management Systems\n- Progressive Web Apps\n- Website Maintenance & Support\n\nWe use technologies like Laravel, React, Vue.js, and WordPress to build solutions that scale with your business.",
                'icon' => 'bi bi-globe',
                'status' => true,
                'sort_order' => 2,
                'meta_title' => 'Web Development Services - Modern Websites & Web Apps',
                'meta_description' => 'We create fast, secure, and user-friendly websites tailored to enhance your brand and drive business growth.',
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'short_description' => 'We build innovative, high-performance mobile apps for iOS and Android to enhance user engagement.',
                'description' => "Transform your ideas into powerful mobile experiences. Our mobile development team creates native and cross-platform applications that deliver exceptional user experiences.\n\nOur mobile services:\n\n- iOS App Development\n- Android App Development\n- Cross-Platform Development (React Native, Flutter)\n- App UI/UX Design\n- App Maintenance & Support\n\nWe follow best practices in mobile development to ensure your app is performant, secure, and scalable.",
                'icon' => 'bi bi-phone',
                'status' => true,
                'sort_order' => 3,
                'meta_title' => 'Mobile App Development - iOS & Android Apps',
                'meta_description' => 'We build innovative, high-performance mobile apps for iOS and Android to enhance user engagement.',
            ],
            [
                'title' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
                'short_description' => 'We design intuitive and engaging user interfaces that provide exceptional user experiences.',
                'description' => "Great design is about more than just aesthetics. Our UI/UX design team focuses on creating intuitive, accessible, and engaging experiences that users love.\n\nOur design services:\n\n- User Research & Analysis\n- Wireframing & Prototyping\n- Visual Design & Branding\n- Usability Testing\n- Design Systems\n\nWe use tools like Figma and Adobe Creative Suite to bring your vision to life.",
                'icon' => 'bi bi-palette',
                'status' => true,
                'sort_order' => 4,
                'meta_title' => 'UI/UX Design Services - User-Centered Design',
                'meta_description' => 'We design intuitive and engaging user interfaces that provide exceptional user experiences.',
            ],
            [
                'title' => 'Cloud Solutions',
                'slug' => 'cloud-solutions',
                'short_description' => 'We provide cloud migration, management, and optimization services for AWS, Azure, and Google Cloud.',
                'description' => "Harness the power of cloud computing with our comprehensive cloud solutions. We help businesses migrate, manage, and optimize their cloud infrastructure.\n\nOur cloud services:\n\n- Cloud Migration Strategy\n- Infrastructure as Code\n- Cloud Security & Compliance\n- Performance Optimization\n- Managed Cloud Services\n\nWe work with AWS, Azure, and Google Cloud Platform to deliver reliable and scalable cloud solutions.",
                'icon' => 'bi bi-cloud',
                'status' => true,
                'sort_order' => 5,
                'meta_title' => 'Cloud Solutions - AWS, Azure, GCP Services',
                'meta_description' => 'We provide cloud migration, management, and optimization services for AWS, Azure, and Google Cloud.',
            ],
            [
                'title' => 'DevOps & CI/CD',
                'slug' => 'devops-cicd',
                'short_description' => 'We implement DevOps practices and CI/CD pipelines to streamline your development workflow.',
                'description' => "Accelerate your development lifecycle with our DevOps services. We help teams implement continuous integration, continuous delivery, and infrastructure automation.\n\nOur DevOps services:\n\n- CI/CD Pipeline Setup\n- Docker Containerization\n- Kubernetes Orchestration\n- Infrastructure Automation\n- Monitoring & Logging\n\nWe use tools like Jenkins, GitHub Actions, Docker, Kubernetes, and Terraform to streamline your operations.",
                'icon' => 'bi bi-gear',
                'status' => true,
                'sort_order' => 6,
                'meta_title' => 'DevOps & CI/CD Services - Streamline Development',
                'meta_description' => 'We implement DevOps practices and CI/CD pipelines to streamline your development workflow.',
            ],
            [
                'title' => 'Database Management',
                'slug' => 'database-management',
                'short_description' => 'We design, optimize, and manage databases for performance, reliability, and scalability.',
                'description' => "Efficient data management is crucial for business success. Our database experts design and manage robust database solutions.\n\nOur database services:\n\n- Database Design & Architecture\n- Performance Tuning & Optimization\n- Migration & Integration\n- Backup & Recovery\n- 24/7 Monitoring & Support\n\nWe work with PostgreSQL, MySQL, MongoDB, and other database technologies.",
                'icon' => 'bi bi-database',
                'status' => true,
                'sort_order' => 7,
                'meta_title' => 'Database Management Services - Design & Optimization',
                'meta_description' => 'We design, optimize, and manage databases for performance, reliability, and scalability.',
            ],
            [
                'title' => 'IT Consulting',
                'slug' => 'it-consulting',
                'short_description' => 'Strategic technology consulting to help you make informed decisions and achieve your business goals.',
                'description' => "Make smarter technology decisions with our IT consulting services. Our experienced consultants provide strategic guidance to help you navigate the complex technology landscape.\n\nOur consulting services:\n\n- Technology Strategy & Roadmap\n- Digital Transformation\n- Architecture Planning\n- Technology Stack Selection\n- Security Assessment\n\nWe provide unbiased, expert advice aligned with your business objectives.",
                'icon' => 'bi bi-lightbulb',
                'status' => true,
                'sort_order' => 8,
                'meta_title' => 'IT Consulting Services - Strategic Technology Guidance',
                'meta_description' => 'Strategic technology consulting to help you make informed decisions and achieve your business goals.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
