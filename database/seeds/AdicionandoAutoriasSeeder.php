<?php

use App\Autorias;
use Illuminate\Database\Seeder;

class AdicionandoAutoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Autorias::class, 120)->create();

    }
}
