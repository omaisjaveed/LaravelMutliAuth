<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of students
        $students = [
            ['name' => 'OMAIS', 'Email' => 'OMAIS@test.com'],
            ['name' => 'ALI', 'Email' => 'ALI@test.com'],
            ['name' => 'AHMED', 'Email' => 'AHMED@test.com'],
            ['name' => 'FATIMA', 'Email' => 'FATIMA@test.com'],
            ['name' => 'ZARA', 'Email' => 'ZARA@test.com'],
            ['name' => 'SAAD', 'Email' => 'SAAD@test.com'],
            ['name' => 'AYESHA', 'Email' => 'AYESHA@test.com'],
            ['name' => 'UMAR', 'Email' => 'UMAR@test.com'],
            ['name' => 'KASHIF', 'Email' => 'KASHIF@test.com'],
            ['name' => 'RAHIM', 'Email' => 'RAHIM@test.com'],
        ];

        // Seed students and their associated contacts
        foreach ($students as $studentData) {
            $student = Student::create($studentData); // Create student

            // Create associated contact for each student
            Contact::create([
                'student_id' => $student->id, // Foreign key
                'email' => $studentData['Email'],
                'phone' => fake()->phoneNumber(),
                'address' => fake()->address(),
                'city' => fake()->city(),
            ]);
        }
    }
}
