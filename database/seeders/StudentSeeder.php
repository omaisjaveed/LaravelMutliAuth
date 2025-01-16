<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add multiple records
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

        // Insert each record
        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
