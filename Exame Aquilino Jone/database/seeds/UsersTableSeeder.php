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
        //
       
    	DB::table('users')->insert([
          'name' => 'Luan Jone',
          'email' => 'ljone@izyshop.co.mz',
          'password' => 123123
      ]);
    }
}
