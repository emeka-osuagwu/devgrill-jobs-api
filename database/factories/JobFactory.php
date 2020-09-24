<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Senior Laravel Developer',
            'detail' => $this->faker->realText($maxNbChars = 2000, $indexSize = 2),
            'job_type' => rand(0, 1) ? 'Freelance' : 'Full Time',
            
            'experience' => rand(1, 6),
            'qualification' => $this->faker->name,
            
            'company_email' => $this->faker->unique()->safeEmail,
            'company_name' => $this->faker->company,
            'company_url' => $this->faker->url,
            'company_image' => $this->faker->imageUrl($width = 640, $height = 480),
            'application_link' => $this->faker->url,
            
            'compensation' => $this->faker->name,
            'compensation_type' => $this->faker->name,
            'compensation_currency' => $this->faker->name,
            
            'location' => $this->faker->country,
            'remote' => rand(0, 1) ? true : false,
            'relocation_support' => rand(0, 1) ? true : false,
            
            'job_category_id' => rand(0, 1) ? true : false,
            'dead_line' => Carbon::now(),
            // 'email' => $this->faker->unique()->safeEmail,
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ];
    }
}
