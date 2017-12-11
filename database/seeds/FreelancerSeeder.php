<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Freelancer;

class FreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::Create();

        Freelancer::truncate();

        foreach(range(1, 10) as $i ){
           Freelancer::create([
            'username' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('password'),
            'api_token' => str_random(60)
           ]);
        }
    }
}
