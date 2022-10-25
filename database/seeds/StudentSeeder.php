<?php

use App\Degree;
use App\Exam;
use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;
use Faker\Factory as Factory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker, Factory $factory)
    {
        $exams_id = Exam::all()->pluck('id');
        $degrees = Degree::all()->pluck('id');

        for ($i = 0; $i < 50; $i++) {
            $s = new Student();

            $s->degree_id = $faker->randomElement($degrees);
            $s->name = $faker->firstName();
            $s->surname = $faker->lastName();
            $s->registration_number = $faker->unique()->randomNumber(7, true);
            $s->date_of_birth = $faker->date();
            $s->enrolment_date = $faker->date();
            $s->email = $faker->unique()->email();
            $s->telephone_number = $faker->unique()->bothify('##############');
            $s->fiscal_code = $factory::create("it_IT")->taxId();

            $s->save();

            $examsID = $exams_id->shuffle()->take(3)->all();
            $s->exams()->sync($examsID);
        }
    }
}
