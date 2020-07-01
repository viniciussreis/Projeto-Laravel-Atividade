<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB:table('carros')->insert(['created_at' =>Carbon::now(), 'updated_at'=>Carbon::now(), 'placa'=>'ATX2830', 'modelo'=>'Voyage', 'ano'=>2020, 'cor'=>'Preto']);
    }
}
