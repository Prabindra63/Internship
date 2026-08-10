<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Client;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class AonetechContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->updateServices();
        $this->seedPages();
        $this->seedTestimonials();
        $this->seedClients();
        $this->seedPortfolios();
        $this->seedTeamMembers();
        $this->seedBlog();
    }

    private function updateServices(): void
    {
        Service::where('slug', 'software-development')->update([
            'short_description' => 'We develop innovative, scalable, and secure software to streamline operations and drive digital growth.',
            'description' => "Focusing on the IT industry, we focus on developing top of the line software products specific to the requirements of our clients. Our highly experienced staff works hand in hand with the stakeholders and adopts an agile approach to quickly build effective and strong applications. Our processes include these steps:\n\nProblem Requirements- Analysis & Planning\n- Interact with core stakeholders to gather and clarify user requirements.\n- Frame the project objective, set goals and their timelines, and assign budget allocations.\n- Foresee hurdles ahead of time and plan out ways to counter them.\n\nCoding- Development\n- Build efficient, reliable and scalable application software, using the newest tools and technologies.\n- Follow industry standards so the built software is safe and performs well.\n- Do full best practice compliance code reviews to ensure work is done to the highest quality.\n\nImplementing A Testing Strategy- Testing\n- Unit Testing (Code), Integration Testing (Subsystems), System Testing (Overall system)\n- Conduct end-user acceptance testing to determine whether the solution meets the set expectations by the client.\n\nMoving to Deployment & Support\n- Manage the software installation and setting the software on client machines.\n- Maintain support for the software after installation to ensure proper functionality and relevance.\n\nAgile Approach\n- Work within short iterative sprints to respond quickly to the changing requirements.\n- Communicate with the client on a regular basis through reports and progress updates.\n\nConclusion\nOur IT company strives to give extremely good software solutions with very wide development processes with very wide agile methodological flexibility. In this way, we manage to do careful and quality work at every stage-in from analysis and planning through coding, rigorous testing, deployment, and regular maintenance. We are committed to regularly engaging our clients and maintaining very open lines of communication throughout the development process, ensuring that our solutions never meet expectations but often exceed them.\n\nIt is thus built to adapt quickly to all rapidly changing project requirements and new trends in the market. Working in short iterative sprints, we can quickly adjust what has been done to get feedback, enhance capabilities, and address newly emerging problems. This dynamic minimizes risk while maximizing value delivered to the client, strengthening long-term relationships with them and aiding their business growth.\n\nIn the end, the quality, agility, and collaboration with the client make us a partner on whom clients can depend in developing software. We strive toward constantly improving practices and producing solutions that are secure, scalable, and in harmony with strategic goals of clients' businesses ensuring the success presently and for future projects as well.",
            'icon' => 'bi bi-activity',
            'featured_image' => 'https://aonetech.com.np/assets/img/services-1.jpg',
            'meta_title' => 'Software Development - A one national technology',
            'meta_description' => 'We develop innovative, scalable, and secure software to streamline operations and drive digital growth.',
        ]);

        Service::where('slug', 'web-development')->update([
            'short_description' => 'We create fast, secure, and user-friendly websites tailored to enhance your brand and drive business growth.',
            'description' => "We create interactive, quality sites that captivate users and satisfy our clients needs in the realm of IT. The expert team engages clients closely, deploying modern technologies and best practices to build responsive and accessible sites. Here is a summary of our web development process:\n\nObservation of Requirements & Planning\n- Collaborative engagement of stakeholders to thoroughly understand user requirements.\n- Defining the project scope, establishing milestones and deadlines, and allocating resources will be carried out judiciously.\n- Project challenges are to be predicted as early as possible and the appropriate mechanism for overcoming them will be devised.\n\nReliable Web Development\n- Engaging websites that are responsive and interactive are built using the latest technology and tools.\n- Standard operating practices are used to ensure safety, SEO optimization, and accessibility for all users.\n- Frequent code and peer reviews are conducted in order to ensure best quality and performance.\n\nRigorous Procedure for Testing\n- All varieties of testing will be applied, such as observing usability, performance, and security tests.\n- User acceptance testing shall be performed to establish that the website is conforming to clients expectations and industry standards.\n\nFlawless Deployment and Maintenance\n- Websites shall be deployed on the web server with the utmost care regarding proper installation and configuration.\n- Continuous maintenance should always be done to keep the website functional and updated.\n\nCommunication with Clients\n- There should be open channels of communication with clients throughout all stages of development.\n- Regular client status updates and progress reports shall be delivered at intervals to keep the client informed and engaged.\n\nConclusion\nOur high-quality web development stands out in every step, from initial planning to testing, deployment, and support. As such, our development teams work to ensure that the websites they build are not only aesthetically pleasing but also secure, optimized, and fully aligned with our clients needs.",
            'icon' => 'bi bi-broadcast',
            'featured_image' => 'https://aonetech.com.np/assets/img/services-4.jpg',
            'meta_title' => 'Web Development - A one national technology',
            'meta_description' => 'We create fast, secure, and user-friendly websites tailored to enhance your brand and drive business growth.',
        ]);

        Service::where('slug', 'mobile-app-development')->update([
            'short_description' => 'We build innovative, high-performance mobile apps for iOS and Android to enhance user engagement.',
            'description' => "We are an IT company, and we offer develop customized innovative mobile apps that best suit our customers. This way, every project gets delivered without fail. Here is the step-by-step description of how our method works:\n\nThorough Requirements Gathering and Strategic Planning\n- Meet with stakeholders to collect detailed end-user requirements.\n- Identify project scope, delineate milestones, set deadlines, and schedule resources.\n- Identify potential obstacles in advance and plan effective remedies.\n\nModern Application Development\n- Build all modern, catchy, intuitive, and user-friendly mobile applications with the help of modern tools and technologies.\n- Make sure to follow industry best practices so that apps can be secure, high-performance, and cross-platform-orient.\n- Conduct very frequent code evaluations to keep up the high quality.\n\nComprehensive Testing Schema\n- Carrying a good variety of testing measures through functional, usability, performance, and security testing.\n- Conduct user-acceptance tests to ascertain that the app meets all client expectations and business requirements.\n\nSeamless Deployment\n- Work closely with clients to ensure an easy app store publication.\n- The app is set up for immediate access to the user.\n\nPost-Deployment Support and Maintenance\n- Provide ongoing post-deployment support and periodic updates.\n- Maintain the apps full functionality and keep it growing with the actual trends and user feedback.\n\nClient-Centered Communication\n- Keep lines of communications open with regular updates and progress reports.\n- Be flexible to meet clients requirements all through the development life cycle to keep pace with the changing priorities.\n\nConclusion\nThat is to say, we believe in committing ourselves to exceptional mobile app development services through a well-structured process. We marry strategic planning with cutting-edge development, rigorous testing, seamless deployment, and continuous support to deliver truly innovative mobile solutions.",
            'icon' => 'bi bi-easel',
            'featured_image' => 'https://aonetech.com.np/assets/img/services-3.jpg',
            'meta_title' => 'Mobile App Development - A one national technology',
            'meta_description' => 'We build innovative, high-performance mobile apps for iOS and Android to enhance user engagement.',
        ]);

        Service::whereNotIn('slug', ['software-development', 'web-development', 'mobile-app-development'])->delete();

        $this->command->info('Services updated: '.Service::count().' services');
    }

    private function seedPages(): void
    {
        Page::updateOrCreate(['slug' => 'about'], [
            'title' => 'About Us',
            'content' => "Established in the year 2024, we're a technologically advanced IT outsourcing company that boasts an impressive array of software development services on offer. We create forward-thinking products whose primary purpose lies in the improvement of organizational communication and engagement of the information. We create very sophisticated IT applications at the local and district levels, more aligned to the 'Digital Nepal' initiative by the government.\n\nOur services extend to website and mobile application engineering, solution developing ERP, CRM applications, electronic commerce systems, B2B and B2C solution and even managed cloud hosting.\n\nOur company has been geared towards comprehensive client service and high product quality. It cannot overstate about customer appreciation and meeting of the set deadlines. More so, the company is committed to ensuring that product and cost are optimized as much as possible. Last but not the least, there is nothing more motivating is working with results-oriented individuals who genuinely want to make a difference.",
            'meta_title' => 'About - A one national technology',
            'meta_description' => 'Learn about A one national technology, a vibrant software development firm dedicated to providing intelligent, scalable, and effective digital solutions.',
            'status' => true,
        ]);

        $this->command->info('Page seeded: About Us');
    }

    private function seedTestimonials(): void
    {
        $testimonials = [
            [
                'client_name' => 'Rajesh Sharma',
                'client_position' => 'CEO',
                'company_name' => 'Sharma Enterprises',
                'message' => 'A one national technology delivered an exceptional software solution that transformed our business operations. Their team was professional, responsive, and truly understood our needs.',
                'rating' => 5,
                'status' => true,
            ],
            [
                'client_name' => 'Sita Pandey',
                'client_position' => 'CTO',
                'company_name' => 'Pandey Tech Solutions',
                'message' => 'The web development team at A one national technology created a stunning website for us. The attention to detail and user experience was outstanding. Highly recommended!',
                'rating' => 5,
                'status' => true,
            ],
            [
                'client_name' => 'Anil Gurung',
                'client_position' => 'Founder',
                'company_name' => 'Gurung Startups',
                'message' => 'We partnered with them for our mobile app development and the results were amazing. The app was delivered on time and exceeded our expectations in terms of quality and performance.',
                'rating' => 5,
                'status' => true,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }

        $this->command->info('Testimonials seeded: '.count($testimonials));
    }

    private function seedClients(): void
    {
        $clients = [
            ['name' => 'Sharma Enterprises', 'company_name' => 'Sharma Enterprises', 'logo' => null, 'website_url' => '#', 'description' => 'Leading enterprise solutions provider.', 'status' => true, 'sort_order' => 1],
            ['name' => 'Pandey Tech', 'company_name' => 'Pandey Tech Solutions', 'logo' => null, 'website_url' => '#', 'description' => 'Technology consulting firm.', 'status' => true, 'sort_order' => 2],
            ['name' => 'Gurung Ventures', 'company_name' => 'Gurung Ventures', 'logo' => null, 'website_url' => '#', 'description' => 'Startup incubator and accelerator.', 'status' => true, 'sort_order' => 3],
            ['name' => 'Himalayan Digital', 'company_name' => 'Himalayan Digital', 'logo' => null, 'website_url' => '#', 'description' => 'Digital transformation agency.', 'status' => true, 'sort_order' => 4],
            ['name' => 'Nepal Cloud Services', 'company_name' => 'Nepal Cloud Services', 'logo' => null, 'website_url' => '#', 'description' => 'Cloud infrastructure provider.', 'status' => true, 'sort_order' => 5],
        ];

        foreach ($clients as $data) {
            Client::create($data);
        }

        $this->command->info('Clients seeded: '.count($clients));
    }

    private function seedPortfolios(): void
    {
        $portfolios = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'ecommerce-platform',
                'short_description' => 'A full-featured e-commerce platform built with modern technologies.',
                'description' => "We developed a comprehensive e-commerce platform that handles inventory management, payment processing, order tracking, and customer relationship management. The platform serves over 10,000 active users and processes thousands of transactions daily.\n\nKey features include multi-vendor support, real-time inventory tracking, integrated payment gateway, and advanced analytics dashboard. Built using Laravel, Vue.js, and PostgreSQL for optimal performance and scalability.",
                'client_name' => 'Sharma Enterprises',
                'project_url' => '#',
                'featured_image' => 'https://aonetech.com.np/assets/img/services-1.jpg',
                'technologies_used' => json_encode(['Laravel', 'Vue.js', 'PostgreSQL', 'Redis']),
                'completion_date' => '2025-06-15',
                'status' => true,
                'featured' => true,
            ],
            [
                'title' => 'Hospital Management System',
                'slug' => 'hospital-management-system',
                'short_description' => 'A robust hospital management system streamlining patient care and administration.',
                'description' => "Designed and developed a complete hospital management system that digitizes patient records, appointment scheduling, billing, and pharmacy management. The system improved operational efficiency by 40% and reduced paperwork significantly.\n\nBuilt with a focus on security and compliance, featuring role-based access control, encrypted patient data, and integration with laboratory equipment.",
                'client_name' => 'City Hospital',
                'project_url' => '#',
                'featured_image' => 'https://aonetech.com.np/assets/img/services-4.jpg',
                'technologies_used' => json_encode(['PHP', 'React', 'MySQL', 'Docker']),
                'completion_date' => '2025-03-20',
                'status' => true,
                'featured' => true,
            ],
            [
                'title' => 'Ride Sharing Mobile App',
                'slug' => 'ride-sharing-mobile-app',
                'short_description' => 'A modern ride-sharing application for iOS and Android platforms.',
                'description' => "Created a feature-rich ride-sharing mobile application with real-time tracking, fare estimation, driver management, and payment integration. The app achieved a 4.8-star rating on both App Store and Google Play.\n\nFeatures include real-time GPS tracking, push notifications, in-app messaging, multiple payment options, and a comprehensive rating system.",
                'client_name' => 'QuickRide',
                'project_url' => '#',
                'featured_image' => 'https://aonetech.com.np/assets/img/services-3.jpg',
                'technologies_used' => json_encode(['React Native', 'Node.js', 'MongoDB', 'Firebase']),
                'completion_date' => '2025-09-01',
                'status' => true,
                'featured' => true,
            ],
        ];

        foreach ($portfolios as $data) {
            Portfolio::create($data);
        }

        $this->command->info('Portfolios seeded: '.count($portfolios));
    }

    private function seedTeamMembers(): void
    {
        $members = [
            [
                'name' => 'John Doe',
                'position' => 'CEO & Founder',
                'biography' => 'Visionary leader with over 15 years of experience in the IT industry. Founded A one national technology with a mission to deliver cutting-edge digital solutions.',
                'image' => null,
                'email' => 'john@aonetech.com.np',
                'linkedin_url' => '#',
                'github_url' => '#',
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'CTO',
                'biography' => 'Expert software architect with deep expertise in full-stack development, cloud infrastructure, and team leadership.',
                'image' => null,
                'email' => 'jane@aonetech.com.np',
                'linkedin_url' => '#',
                'github_url' => '#',
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'name' => 'Mike Johnson',
                'position' => 'Lead Developer',
                'biography' => 'Senior developer specializing in Laravel, React, and mobile app development with 8+ years of experience.',
                'image' => null,
                'email' => 'mike@aonetech.com.np',
                'linkedin_url' => '#',
                'github_url' => '#',
                'sort_order' => 3,
                'status' => true,
            ],
        ];

        foreach ($members as $data) {
            TeamMember::create($data);
        }

        $this->command->info('Team members seeded: '.count($members));
    }

    private function seedBlog(): void
    {
        $category = BlogCategory::firstOrCreate(
            ['slug' => 'technology'],
            ['name' => 'Technology', 'description' => 'Technology news and updates']
        );

        BlogPost::create([
            'category_id' => $category->id,
            'author_id' => 1,
            'title' => 'The Future of Web Development in 2025',
            'slug' => 'future-of-web-development-2025',
            'excerpt' => 'Explore the latest trends shaping web development, from AI-powered tools to progressive web apps.',
            'content' => "Web development continues to evolve at a rapid pace. In 2025, we're seeing several key trends that are shaping the industry:\n\n1. AI-Powered Development Tools\nAI assistants are becoming integral to the development workflow, helping developers write better code faster.\n\n2. Progressive Web Apps\nPWAs continue to bridge the gap between web and native applications, offering offline capabilities and push notifications.\n\n3. Serverless Architecture\nMore businesses are adopting serverless computing for better scalability and reduced operational costs.\n\n4. WebAssembly\nWASM is opening new possibilities for running high-performance code in the browser.\n\nAt A one national technology, we stay ahead of these trends to deliver cutting-edge solutions to our clients.",
            'meta_title' => 'The Future of Web Development in 2025',
            'meta_description' => 'Explore the latest trends shaping web development in 2025.',
            'status' => true,
            'published_at' => now(),
        ]);

        $this->command->info('Blog seeded: 1 post');
    }
}
