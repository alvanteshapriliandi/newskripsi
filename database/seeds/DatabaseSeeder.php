<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(FreelancerSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
