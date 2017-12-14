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
       $this->call(UsersTableSeeder::class);
        $this->call(GruposTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
        $this->call(TipoCasamentoTableSeeder::class);
        $this->call(CidadaoTableSeeder::class);
        $this->call(CasamentoTableSeeder::class);
        
    }
}
