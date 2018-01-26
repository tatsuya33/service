<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('posts')->truncate();

        DB::table('posts')->insert([
            [
                'ramen_name'      => '武蔵屋',
                'address'       => '東京都',
                'kind'   => '豚骨醤油',
                'price' => '650',
                'comment' => 'sampleです',
                'created_at' => '2016-08-12 14:00:00',
                'updated_at' => '2016-08-12 14:00:00',
            ],
        ]);
    }
}
