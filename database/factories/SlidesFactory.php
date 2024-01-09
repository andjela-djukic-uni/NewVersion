<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slides>
 */
class SlidesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /*[
            //Slides::create([
            'title' => 'Park Istra',
            'sentance' => 'Do you need help?'
            ],
        [
            'title' => 'Park Istra',
            'sentance' => 'Do you know someone who needs help?'
        ],
        [
            'title' => 'Park Istra',
            'sentance' => 'Do you want to help?'
        ],
        [
            'title' => 'Park Istra',
            'sentance' => 'Bring up the hero in you!'
        ]*/
        ];
    }
}
