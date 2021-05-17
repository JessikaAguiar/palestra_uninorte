<?php

use App\Generos;
use Illuminate\Database\Seeder;

class AdicionandoGenerosLiterariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            ['descricao' => 'Romance'],
            ['descricao' => 'Drama'],
            ['descricao' => 'Novela'],
            ['descricao' => 'Conto'],
            ['descricao' => 'Crônica'],
            ['descricao' => 'Ensaio'],
            ['descricao' => 'Poesia'],
            ['descricao' => 'Carta'],
            ['descricao' => 'Biografia'],
            ['descricao' => 'Memórias'],
            ['descricao' => 'Aventura'],
            ['descricao' => 'Chick-Lit'],
            ['descricao' => 'Graphic Novel'],
            ['descricao' => 'História em Quadrinhos'],
            ['descricao' => 'Lad-Lit'],
            ['descricao' => 'Literatura fantástica'],
            ['descricao' => 'Literatura Infantil'],
            ['descricao' => 'Literatura Infanto-Juvenil'],
            ['descricao' => 'Literatura nacional'],
            ['descricao' => 'Terror'],

        ];

        foreach ($generos as $genero) {
            Generos::create($genero);
        }
    }
}
