<?php

use App\Obras;
use Illuminate\Database\Seeder;

class AdicionandoObrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obras = [
            [
                'titulo' => 'Dom Quixote',
                'genero_id' => '1'
            ],
            [
                'titulo' => 'Guerra e Paz',
                'genero_id' => '2'
            ],
            [
                'titulo' => 'A Montanha Mágica',
                'genero_id' => '2'
            ],
            [
                'titulo' => 'Cem Anos de Solidão',
                'genero_id' => '4'
            ],
            [
                'titulo' => 'Ulisses',
                'genero_id' => '5'
            ],
            [
                'titulo' => 'Crepusculo',
                'genero_id' => '6'
            ],
            [
                'titulo' => 'Em Busca do Tempo Perdido',
                'genero_id' => '7'
            ],
            [
                'titulo' => 'A Divina Comédia',
                'genero_id' => '20'
            ],
            [
                'titulo' => 'O Homem sem Qualidades',
                'genero_id' => '20'
            ],
            [
                'titulo' => 'O Processo',
                'genero_id' => '10'
            ],
            [
                'titulo' => 'O Som e a Fúria',
                'genero_id' => '11'
            ],
            [
                'titulo' => 'A menina de roubava livro',
                'genero_id' => '12'
            ],
            [
                'titulo' => 'O Homem Invisível',
                'genero_id' => '12'
            ],
            [
                'titulo' => 'As três irmãs',
                'genero_id' => '14'
            ],
            [
                'titulo' => 'As Viagens de Gulliver',
                'genero_id' => '15'
            ],
        ];

        foreach ($obras as $obra) {
            Obras::create($obra);
        }
    }
}
