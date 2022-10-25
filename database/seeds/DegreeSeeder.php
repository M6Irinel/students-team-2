<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Degree;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $levelName = ['triennale','magistrale'];

        for ($i = 0; $i < 50; $i++) { 

            $degree = new Degree();
            $degree->name = $faker->words(rand(5,10),true);
            $degree->level = $faker->randomElement($levelName);
            $degree->addres = $faker->address();
            $degree->email = $faker->email();
            $degree->website = $faker->url();

            $degree->save();

            
        }
    }
}
