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
            'title' => 'Senior Laravel Developer ' . $this->faker->name,
            'detail' => $this->faker->realText($maxNbChars = 2000, $indexSize = 2),
            'job_type' => rand(0, 1) ? 'Freelance' : 'Full Time',
            
            'experience' => rand(1, 6),
            'qualification' => $this->faker->name,
            
            'company_email' => $this->faker->unique()->safeEmail,
            'company_name' => $this->faker->company,
            'company_url' => $this->faker->url,
            'company_image' => "https://res.cloudinary.com/arm/image/upload/v1601093733/3_xglhd7.jpg",
            'application_link' => "https://devgrill.com/",
            
            'compensation' => $this->faker->name,
            'compensation_type' => $this->faker->name,
            'compensation_currency' => $this->faker->name,
            
            'location' => $this->faker->country,
            'remote' => rand(0, 1) ? true : false,
            'relocation_support' => rand(0, 1) ? true : false,
            
            'job_category_id' => $this->faker->randomDigitNot(0),
            'dead_line' => Carbon::now(),
        ];
    }
}
