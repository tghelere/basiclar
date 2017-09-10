<?php

use Charlie\User;
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
        User::truncate();

        $user = new User();
        $user->name = 'Thyago Ghelere';
        $user->email = 'ghelere@outlook.com';
        $user->password = bcrypt('teste123');
        $user->save();


        factory(User::class, 20)->create();
    }
}
