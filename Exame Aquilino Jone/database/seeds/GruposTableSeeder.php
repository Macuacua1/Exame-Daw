<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
           'name' => 'DAW 2017',
           'description' => 'Cadeira DAW 2017',
           'user_id' => '1',
           'state' => true
       ]);

        DB::table('grupos')->insert([
           'name' => 'AN 2017',
           'description' => 'Cadeira DAW 2017',
           'user_id' => '1',
           'state' => true
       ]);

        DB::table('grupos')->insert([
           'name' => 'EGS 2017',
           'description' => 'Cadeira EGS 2017',
           'user_id' => '1',
           'state' => true
       ]);

    }
}
