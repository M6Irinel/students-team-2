<?php

use Illuminate\Database\Seeder;
use App\Exam;
use Faker\Generator as Faker;
use Faker\Factory as Factory;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, Factory $factory)
    {
        for($i=0; $i<50; $i++){
            $nE = new Exam();
            $nE->name = $faker->asciify('********************');
            $nE->date = $faker->date();
            $nE->hour = $faker->time();
            $nE->address = $faker->asciify('********************');
            $nE->room = $faker->unique()->bothify('##');

            $nE->save();
        }
    }
}
