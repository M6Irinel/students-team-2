<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Course;
use App\Degree;
use App\Teacher;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $courses_name = Course::COURSE_NAME;
        $period = Course::PERIOD;
        $cfu = Course::CFU;

        $degrees = Degree::all()->pluck('id');
        $teachers_id = Teacher::all()->pluck('id');

        foreach ($degrees as $degree) {

            for ($i = 0; $i < 5; $i++) {
                $c = new Course();

                $c->name = $faker->randomElement($courses_name);
                $c->degree_id = $degree;
                $c->description = $faker->optional()->paragraphs(rand(2, 4), true);
                $c->period = $faker->randomElement($period);
                $c->year = rand(1, 3);
                $c->cfu = $faker->randomElement($cfu);
                $c->website = $faker->url();

                $c->save();

                $teacherID = $teachers_id->shuffle()->take(3)->all();
                $c->teachers()->sync($teacherID);
            }
        }
    }
}
