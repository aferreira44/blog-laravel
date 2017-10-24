<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => str_random(15),
            'body' => str_random(140),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
