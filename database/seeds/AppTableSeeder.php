<?php

use Illuminate\Database\Seeder;

class AppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Project::class, 50)->create();
        factory(\App\Blog::class, 50)->create();
        factory(\App\Page::class, 50)->create();
    }
}
