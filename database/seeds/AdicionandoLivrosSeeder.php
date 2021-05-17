<?php

use App\Livros;
use Illuminate\Database\Seeder;

class AdicionandoLivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Livros::class, 120)->create();

    }
}
