<?php

use Illuminate\Database\Seeder;

class CasamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('casamentos')->insert([
          'descricao' => 'Melhor coisa que me aconteceu',
          'tipocasamento_id' => 1,
          'ano_inicio' => 2014,
          'ano_fim' => 2090,
          'estado' => true,
          'esposo_id' => '1',
          'esposa_id' => '2'
      ]);

        DB::table('casamentos')->insert([
          'descricao' => 'Aconteceu',
          'tipocasamento_id' => 1,
          'ano_inicio' => 2014,
          'ano_fim' => 2015,
          'estado' => false,
          'esposo_id' => '3',
          'esposa_id' => '4'
      ]);
    }
}
