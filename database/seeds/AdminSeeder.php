<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = array(
    	 	'username' => 'Alvantesha Priliandi',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => '3'
        );
        User::create($admin);
    }
}
