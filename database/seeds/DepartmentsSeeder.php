<?php

use Illuminate\Database\Seeder;
use App\Department;
use Faker\Generator as Faker;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach (Department::DEPARTMENTS_NAME as $department) {
            $d = new Department();

            $d->name = $department;
            $d->address = $faker->address();
            $d->phone = $faker->phoneNumber();
            $d->email = $faker->email();

            $d->save();
        }
    }
}
