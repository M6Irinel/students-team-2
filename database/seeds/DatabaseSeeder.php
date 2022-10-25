<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            DepartmentsSeeder::class,
            TeacherSeeder::class,
            DegreeSeeder::class,
            CourseSeeder::class,
            ExamSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
