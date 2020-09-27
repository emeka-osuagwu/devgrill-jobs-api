<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class JobsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // \App\Models\Job::factory(3)->create();

        \App\Models\Job::factory(100)->create()->each(function ($job) {
            $job->attachTags(['PHP', 'Nodejs', 'Javascript', 'Vuejs']);
            return $job->save();
        });

        // \App\Models\Job::create([
            
        //         'title' => 'Senior Laravel Developer',
        //         'detail' => "ckejvekj",
        //         'job_type' => rand(0, 1) ? 'Freelance' : 'Full Time',
                
        //         'experience' => rand(1, 6),
        //         'qualification' => $faker->name,
                
        //         'company_email' => $faker->unique()->safeEmail,
        //         'company_name' => $faker->company,
        //         'company_url' => $faker->url,
        //         'company_image' => "https://res.cloudinary.com/arm/image/upload/v1601093733/3_xglhd7.jpg",
        //         'application_link' => $faker->url,
                
        //         'compensation' => $faker->name,
        //         'compensation_type' => $faker->name,
        //         'compensation_currency' => $faker->name,
                
        //         'location' => $faker->country,
        //         'remote' => rand(0, 1) ? true : false,
        //         'relocation_support' => rand(0, 1) ? true : false,
                
        //         'job_category_id' => $faker->randomDigitNot(0),
        //         'dead_line' => Carbon::now(),
            
        // ]);

        \App\Models\JobCategory::factory(10)->create();
    }
}
