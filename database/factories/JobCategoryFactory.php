<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\JobCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobCategory::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->name,
        ];
    }
}
