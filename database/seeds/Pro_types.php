<?php

use Illuminate\Database\Seeder;

class Pro_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
        	'name'=>'Пальто',
        	'gender_id'=> '1'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Пиджак',
        	'gender_id'=> '1'
        ]);
        // DB::table('product_types')->insert([
        // 	'name'=>'Дээл',
        // 	'gender_id'=> '1'
        // ]);
        // DB::table('product_types')->insert([
        // 	'name'=>'Малгай',
        // 	'gender_id'=> '1'
        // ]);
        DB::table('product_types')->insert([
        	'name'=>'Цамц',
        	'gender_id'=> '1'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Өмд',
        	'gender_id'=> '1'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Пальто',
        	'gender_id'=> '2'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Пиджак',
        	'gender_id'=> '2'
        ]);
        // DB::table('product_types')->insert([
        // 	'name'=>'Дээл',
        // 	'gender_id'=> '2'
        // ]);
        // DB::table('product_types')->insert([
        // 	'name'=>'Малгай',
        // 	'gender_id'=> '2'
        // ]);
        DB::table('product_types')->insert([
        	'name'=>'Цамц',
        	'gender_id'=> '2'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Өмд',
        	'gender_id'=> '2'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Платье',
        	'gender_id'=> '2'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Юбка',
        	'gender_id'=> '2'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Нөмрөг',
        	'gender_id'=> '2'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Хөнжил',
        	'gender_id'=> '3'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Нөмрөг',
        	'gender_id'=> '3'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Бүтээлэг',
        	'gender_id'=> '3'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Дэр',
        	'gender_id'=> '3'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Орхимж',
        	'gender_id'=> '3'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Аяны хөнжил',
        	'gender_id'=> '3'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Аяны сет',
        	'gender_id'=> '3'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Малгай',
        	'gender_id'=> '4'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Ороолт',
        	'gender_id'=> '4'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Шааль',
        	'gender_id'=> '4'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Оймс',
        	'gender_id'=> '4'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Бээлий',
        	'gender_id'=> '4'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Алчуур',
        	'gender_id'=> '4'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Gift box',
        	'gender_id'=> '5'
        ]);
        DB::table('product_types')->insert([
        	'name'=>'Gift card',
        	'gender_id'=> '5'
        ]);
    }
}
