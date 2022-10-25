<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Course;
use App\Degree;

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

        foreach ($degrees as $degree) {

            for ($i = 0; $i < 10; $i++) {
                $n = new Course();
    
                $n->name = $faker->randomElement($courses_name);
                $n->degree_id = $degree;
                $n->description = $faker->optional()->paragraphs(rand(2, 4), true);
                $n->period = $faker->randomElement($period);
                $n->year = rand(1, 3);
                $n->cfu = $faker->randomElement($cfu);
                $n->website = $faker->url();
    
                $n->save();
            }
        }
    }
}
