<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Degree;
use App\Department;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $departments = Department::all()->pluck('id');

        for ($i = 0; $i < 20; $i++) {
            $d = new Degree();

            $d->department_id = $faker->randomElement($departments);
            $d->name = $faker->words(rand(5, 10), true);
            $d->level = $faker->randomElement(Degree::LEVEL_NAME);
            $d->addres = $faker->address();
            $d->email = $faker->email();
            $d->website = $faker->url();

            $d->save();
        }
    }
}
