<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Student;
use App\Models\Friend;

class FriendSeeder extends Seeder
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
        foreach ($studentIds as $key => $studentId) {
            $friendIds =  Arr::except($studentIds, $key);
            foreach ($friendIds as $friendId) {
                Friend::create([
                    'student_id' => $studentId,
                    'friend_id' => $friendId
                ]);
            }
        }
    }
}
