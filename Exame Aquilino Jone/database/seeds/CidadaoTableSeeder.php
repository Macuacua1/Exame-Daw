<?php

use Illuminate\Database\Seeder;

class CidadaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cidadaos')->insert([
          'nome' => 'Luan Jone',
          'bi' => 'ASGAHGSHAD1',
          'nuit' => '12323232',
          'data_nascimento' => '19801212',
          'provincia_id' => '1'
      ]);

         DB::table('cidadaos')->insert([
          'nome' => 'Luana Jone',
          'bi' => 'ASGAHGSASD1',
          'nuit' => '123212232',
          'data_nascimento' => '19901212',
          'provincia_id' => '2'
      ]);

         DB::table('cidadaos')->insert([
          'nome' => 'Mario Jone',
          'bi' => 'ASGAHGSHAD1',
          'nuit' => '12323232',
          'data_nascimento' => '19801212',
          'provincia_id' => '1'
      ]);

         DB::table('cidadaos')->insert([
          'nome' => 'Maria Jone',
          'bi' => 'ASGAHGSASD1',
          'nuit' => '123212232',
          'data_nascimento' => '19901212',
          'provincia_id' => '2'
      ]);
    }
}
