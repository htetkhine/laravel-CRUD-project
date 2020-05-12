<?php

use Illuminate\Database\Seeder;
use App\Blog;
use Faker\Factory as Faker;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Blog::create([
                'title'=>$faker->name,
                'body'=>$faker->text
            ]);
        }
    }
}
