<?php

use Illuminate\Database\Seeder;

class UserParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\UserParent::class, 15)->create();
    }
}
