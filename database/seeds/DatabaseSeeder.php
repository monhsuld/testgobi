<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeed::class);
        $this->call(Brandseed::class);
        $this->call(Gender::class);
        $this->call(Pro_types::class);
    }
}
