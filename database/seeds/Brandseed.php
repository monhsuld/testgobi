<?php

use Illuminate\Database\Seeder;

class Brandseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        	'name'=>'Yama'
        ]);
        DB::table('brands')->insert([
        	'name'=>'Organic'
        ]);
        DB::table('brands')->insert([
        	'name'=>'Gobi'
        ]);
        DB::table('brands')->insert([
        	'name'=>'Kids'
        ]);
        DB::table('brands')->insert([
            'name'=>'organic'
        ]);
    }
}
