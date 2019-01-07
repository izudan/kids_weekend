<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category_id' => '1',
                'category_name' => '教育'
            ]
        ]);
        DB::table('categories')->insert([
            [
                'category_id' => '2',
                'category_name' => '音楽'
            ]
        ]);
        DB::table('categories')->insert([
            [
                'category_id' => '3',
                'category_name' => 'スポーツ'
            ]
        ]);
        DB::table('categories')->insert([
            [
                'category_id' => '4',
                'category_name' => 'アート'
            ]
        ]);
        DB::table('categories')->insert([
            [
                'category_id' => '5',
                'category_name' => 'サイエンス'
            ]
        ]);
        DB::table('categories')->insert([
            [
                'category_id' => '6',
                'category_name' => 'コミュニケーション'
            ]
        ]);
    }
}