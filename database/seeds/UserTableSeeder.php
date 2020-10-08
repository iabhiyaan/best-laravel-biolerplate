<?php

use App\User;
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
        User::truncate();
        $user = [
            [
                'name' => 'Rose Business International',
                'email' => 'info@rbi.com',
                'password' => bcrypt('rbi@123business'),
            ],

            [
                'name' => 'Web House Admin',
                'email' => 'info@user.com',
                'password' => bcrypt('secret'),
            ],
        ];

        User::insert($user);
    }
}
