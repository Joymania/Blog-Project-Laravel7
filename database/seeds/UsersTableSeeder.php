<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
            'user_id' => 'admin1',
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'khorshedicepust@gmail.com',
            'password' => bcrypt('@joyM2018'),
        ]);

        $user=User::create([
            'user_id' => 'user1',
            'name' => 'user',
            'role_id' => 2,
            'email' => 'user@gmail.com',
            'password' => bcrypt('@joyM2018'),
        ]);
    }
}
