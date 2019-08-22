<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->truncate();

        User::create([
            'name' => "arsadmin",
            'email' => "arsadmin@admin.com",
            'password' => bcrypt("arsadmin"),
            'is_admin' => true
        ]);
    }
}
