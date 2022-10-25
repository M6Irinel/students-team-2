<?php

use App\Teacher;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $t = new Teacher();

            $t->name = $faker->firstName();
            $t->surname = $faker->lastName();
            $t->email = $faker->email();
            $t->telephone = $faker->phoneNumber();

            $t->save();
        }
    }
}
