<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'FornecedorAbc';
        $fornecedor->site = 'FornecedorAbc.com';
        $fornecedor->cidade = 'Matola';
        $fornecedor->email = 'FornecedorAbc@gmail.com';
        $fornecedor->save();

        $fornecedor->create([
            'nome' => 'Fornecedor 100',
            'site' => 'fornecedor100.com',
            'cidade' => 'Maputo',
            'email' => 'contato@fornecedor.com'
        ]);
    }
}
