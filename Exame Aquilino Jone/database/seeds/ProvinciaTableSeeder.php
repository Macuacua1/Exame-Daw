<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('provincias')->insert([
          'nome' => 'Maputo Cidade'
      ]);

        DB::table('provincias')->insert([
          'nome' => 'Maputo Provincia'
      ]);
        DB::table('provincias')->insert([
          'nome' => 'Sofala'
      ]);
        DB::table('provincias')->insert([
          'nome' => 'Nampula '
      ]);
    }
}
