<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Admin',
        	'email'=>'suld.oyu@gmail.com',
            'role_id'=>'1',
        	'password'=>bcrypt('suldee123')
        ]);
    }
}
