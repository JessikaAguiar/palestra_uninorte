<?php

use App\Autores;
use Illuminate\Database\Seeder;

class AdicionandoAutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Autores::class, 20)->create();
    }
}
