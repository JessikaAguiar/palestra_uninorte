<?php

use App\Editoras;
use Illuminate\Database\Seeder;

class AdicionandoEditorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editoras = [
            ['nome_fantasia' => 'Companhia da Letras', 'cnpj' => '41.362.137/0001-73'],
            ['nome_fantasia' => 'Aleph', 'cnpj' => '72.356.989/0001-81'],
            ['nome_fantasia' => 'Suma', 'cnpj' => '24.655.337/0001-03'],
            ['nome_fantasia' => 'Editora Intrínseca', 'cnpj' => '24.655.337/0001-03'],
            ['nome_fantasia' => 'Grupo Editorial Record', 'cnpj' => '70.764.907/0001-02'],
            ['nome_fantasia' => 'Editora Rocco', 'cnpj' => '78.857.792/0001-02'],
            ['nome_fantasia' => 'Globo Livros', 'cnpj' => '90.809.322/0001-79'],
            ['nome_fantasia' => 'Darkside Books', 'cnpj' => '91.968.630/0001-00'],
            ['nome_fantasia' => 'Harper Collins', 'cnpj' => '04.284.220/0001-45'],
            ['nome_fantasia' => 'Editora Arqueiro', 'cnpj' => '51.034.436/0001-32'],
            ['nome_fantasia' => 'Leya', 'cnpj' => '24.653.934/0001-90'],
            ['nome_fantasia' => 'Saraiva', 'cnpj' => '76.269.523/0001-08'],
            ['nome_fantasia' => 'FTD', 'cnpj' => '31.562.585/0001-67'],
            ['nome_fantasia' => 'Sextante', 'cnpj' => '51.242.617/0001-54'],
            ['nome_fantasia' => 'Gente', 'cnpj' => '81.502.956/0001-93'],
        ];

        foreach ($editoras as $editora) {
            Editoras::create($editora);
        }
    }
}
