<?php

use Illuminate\Database\Seeder;
use App\Exam;
use Faker\Generator as Faker;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $e = new Exam();

            $e->date = $faker->date();
            $e->hour = $faker->time();
            $e->address = $faker->address();
            $e->room = $faker->unique()->bothify('##');

            $e->save();
        }
    }
}
