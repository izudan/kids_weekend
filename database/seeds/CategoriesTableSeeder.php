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
                'category_name' => '体験'
            ]
        ]);
        DB::table('categories')->insert([
            [
                'category_id' => '3',
                'category_name' => 'スポーツ'
            ]
        ]);
    }
}