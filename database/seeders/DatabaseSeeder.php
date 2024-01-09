<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Projects;
use App\Models\Slides;
use App\Models\Testimonials;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        //Slides
        Slides::create([
            'title' => 'Park Istra',
            'sentance' => 'Do you need help?',
            'pictureUrl' => 'background:url(img/cvet.jpg) no-repeat'
        ]);
        Slides::create([
            'title' => 'Park Istra',
            'sentance' => 'Do you know someone who needs help?',
            'pictureUrl' => 'background:url(img/Slap.jpg) no-repeat'
        ]);
        Slides::create([
            'title' => 'Park Istra',
            'sentance' => 'Do you want to help?',
            'pictureUrl' => 'background:url(img/Panorama.jpg) no-repeat'
        ]);
        Slides::create([
            'title' => 'Park Istra',
            'sentance' => 'Bring up the hero in you!',
            'pictureUrl' => 'background:url(img/skale.jpg) no-repeat'
        ]);
        

        //Testimonials
        Testimonials::create([
            'testimonial' => 'This experience has made me better and I feel I’ve learned much more than in years and years of school.',
            'name' => 'Christiana',
            'location' => 'Italy'
        ]);
        Testimonials::create([
            'testimonial' => 'I will carry with me few of the best times of my life from this place.',
            'name' => 'Lyly',
            'location' => 'Quebec'
        ]);
        Testimonials::create([
            'testimonial' => 'The project is an inspiration for me. My time here was a blessing!',
            'name' => 'Ivano',
            'location' => 'South Africa'
        ]);

        Testimonials::create([
            'testimonial' => 'Thank you so much for this amazing life experience. You gave me hope for the future, and motivation for present time. I enjoyed every moment spent here.',
            'name' => 'Laurane',
            'location' => 'France'
        ]);


        //Projects

        Projects::create([
            'title' => 'Helping local communities',
            'pictureUrl' => '/img/localcom.jpg'
        ]);

        Projects::create([
            'title' => 'Supporting local organizations',
            'pictureUrl' => '/img/org.jpg'
        ]);

        Projects::create([
            'title' => 'Preserving istrian heritage',
            'pictureUrl' => '/img/her.jpg'
        ]);

        Projects::create([
            'title' => 'Education',
            'pictureUrl' => '/img/edu.jpg'
        ]);
        

        //\App\Models\Slides::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
        

}
