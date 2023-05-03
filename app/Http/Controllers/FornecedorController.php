<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N' , 
                'cnpj'=> '0' ,
                'ddd'=> '258', //Mocambique
                'telefone' => '000 000 00'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S' , 
                'cnpj' => 'null',
                'ddd'=> '268', //Africa do sull
                'telefone' => '000 000 00'
                
            ],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'S' , 
                'cnpj' => 'null',
                'ddd'=> '289', //Brazil
                'telefone' => '000 000 00'
                
            ]
        ];
      
        
   
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
