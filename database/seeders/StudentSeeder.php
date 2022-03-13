<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt(1);
        DB::table('students')->insert([
            ['name' => 'Dung', 'email' => 'dung@gmail.com', 'password' => $password],
            ['name' => 'Test', 'email' => 'test@gmail.com', 'password' => $password],
            ['name' => 'Student', 'email' => 'student@gmail.com', 'password' => $password],
            ['name' => 'Demo' , 'email' => 'demo@gmail.com', 'password' => $password]
        ]);

    }
}
