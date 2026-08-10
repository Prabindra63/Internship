<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            ['client_name' => 'Rajesh Sharma', 'client_position' => 'CEO', 'company_name' => 'TechVentures Nepal', 'message' => 'Working with this team was an incredible experience. They delivered our project on time and exceeded our expectations. Their technical expertise and professionalism are unmatched.', 'rating' => 5, 'status' => true],
            ['client_name' => 'Anita KC', 'client_position' => 'CTO', 'company_name' => 'Digital Solutions Pvt. Ltd.', 'message' => 'The team understood our requirements perfectly and built a solution that streamlined our entire operation. Highly recommended for any software development needs.', 'rating' => 5, 'status' => true],
            ['client_name' => 'Sagar Thapa', 'client_position' => 'Product Manager', 'company_name' => 'InnovateTech', 'message' => 'We were impressed by their attention to detail and commitment to quality. The mobile app they developed for us has received excellent feedback from our users.', 'rating' => 4, 'status' => true],
            ['client_name' => 'Priya Adhikari', 'client_position' => 'Director', 'company_name' => 'CloudBase Systems', 'message' => 'Their cloud solutions team helped us migrate our infrastructure seamlessly. The transition was smooth and we have seen significant improvement in performance.', 'rating' => 5, 'status' => true],
            ['client_name' => 'Binod Poudel', 'client_position' => 'Founder', 'company_name' => 'WebCraft Studio', 'message' => 'Outstanding web development service. They built a website that perfectly represents our brand. The design is modern, responsive, and our clients love it.', 'rating' => 5, 'status' => true],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
