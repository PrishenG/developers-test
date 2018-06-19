<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@test.com',
            'password' => bcrypt('secret'),
        ]);*/

        factory(App\User::class, 3)->create();
    }
}
