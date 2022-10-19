<?php

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
        for($i=0; $i<20; $i++){
            $nS = new Student();
            $nS->name = $faker->firstName();
            $nS->surname = $faker->lastName();
            $nS->registration_number = $faker->unique()->randomNumber(7, true);
            $nS->date_of_birth = $faker->date();
            $nS->enrolment_date = $faker->date();
            $nS->email = $faker->unique()->email();
            $nS->telephone_number = $faker->unique()->bothify('##############');
            $nS->fiscal_code = $factory::create("it_IT")->taxId();

            $nS->save();
        }
    }
}
