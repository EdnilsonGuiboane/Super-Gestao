<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    //
    public function contato(Request $request){

       /*
        echo '<prev>';
        print_r($request->all());

        echo '</prev>';

        echo $request->input('nome');

        echo '<br>';

        echo $request->input('email');
        */


        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        // print_r($contato->getAttributes());
        $contato->save();

        */

       // $contato = new SiteContato();
       // $contato->fill($request->all());
       // $contato->save();

       // print_r($contato->getAttributes());

        return view ('site.contato',['titulo' => 'Contato (Teste)']);
    }

    public function salvar(Request $request ){
        //realizar os dados da validacao do formulario antes de gravar os dados no banco de dados
        

        //SiteContato::create($request->all());
    }
    
}
