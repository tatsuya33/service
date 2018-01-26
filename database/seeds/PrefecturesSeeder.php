<?php

use Illuminate\Database\Seeder;

class PrefecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefectures = [
            ['code' => 1, 'name' => '茨城県'],
            ['code' => 2, 'name' => '栃木県'],
            ['code' => 3, 'name' => '群馬県'],
            ['code' => 4, 'name' => '埼玉県'],
            ['code' => 5, 'name' => '千葉県'],
            ['code' => 6, 'name' => '東京都'],
            ['code' => 7, 'name' => '神奈川県'],

        ];
        DB::table('prefectures')->insert($prefectures);
    }
}
