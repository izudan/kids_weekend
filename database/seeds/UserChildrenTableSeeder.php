<?php

use Illuminate\Database\Seeder;

class UserChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\UserChild::class, 15)->create();
    }
}
