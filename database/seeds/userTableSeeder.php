<?php

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
        DB::table('m_user')->insert([
            'username' => 'admin',
            'password' => sha1('p@ssw0rD@oriFlam3'),
            'created_datetime' => date('Y-m-d H:i:s')
    	]);
    }
}
