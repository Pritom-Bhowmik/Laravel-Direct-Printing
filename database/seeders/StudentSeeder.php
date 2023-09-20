<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        foreach (range(1,20) as $index) {
            Student::create([
                'student_name' => $faker->name,
                'student_email' => $faker->email,
                'student_phone' => $faker->phoneNumber,
                'student_roll' => $faker->randomNumber,
                'student_description' => $faker->jobTitle
            ]);
        }
    }
}
