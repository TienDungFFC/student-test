<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $studentIds = Student::all()->pluck('id')->toArray();

        foreach ($studentIds as $studentId) {
            $salary = random_int(5000000, 100000000);
            Package::create([
                'student_id' => $studentId,
                'salary' => $salary
            ]);
        }
    }
}
