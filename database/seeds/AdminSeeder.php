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
        User::create([
            'name'=>"CORPSOFT",
            'email'=>'ashykhminstanislav@gmail.com',
            'password'=> bcrypt('admin'),
        ]);
    }
}
