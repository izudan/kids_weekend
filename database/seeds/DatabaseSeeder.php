<?php

use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UserParentsTableSeeder::class);
        $this->call(UserChildrenTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(FamiliesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
    }
}
