<?php

use Illuminate\Database\Seeder;

class Gender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
        	'name'=>'Эрэгтэй'
        ]);
        DB::table('genders')->insert([
        	'name'=>'Эмэгтэй'
        ]);
        DB::table('genders')->insert([
        	'name'=>'Гэр ахуй'
        ]);
        DB::table('genders')->insert([
        	'name'=>'АКСЕССУАР'
        ]);
        DB::table('genders')->insert([
            'name'=>'Special Gift'
        ]);
    }
}
