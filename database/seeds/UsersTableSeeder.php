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
        User::create([
            'name'      => 'Felipe Augusto',
            'email'     => 'felipe@email.com.br',
            'password'  => bcrypt('1234'),
        ]);
    }
}
