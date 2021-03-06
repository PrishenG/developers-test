<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CompanyTableSeeder::class);

        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@test.com',
            'password' => bcrypt('secret'),
        ]);*/
    }
}
