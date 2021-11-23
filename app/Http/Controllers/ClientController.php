<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    
    public function create(){
        // $allProtudos = Produto::all();    
        // return view('locadora.create',['allProduto' => $allProtudos]);
        
        return view('cliente.create');
    }
    public function list(){
        $allClient = Client::all();
        return view('cliente.list',['allClient' => $allClient]);
    }
    public function store(Request $request){

        $obj = new Client;
            
        $obj->nome = $request->nome;
        $obj->cpf = $request->cpf;
        $obj->cnh = $request->cnh;
        $obj->endereco = $request->endereco;
        $obj->cartao = $request->cartao;
        $obj->status = 0;
        $obj->save();
        //return view('client.create',['msg'=>'Cliente cadastrado com sucesso!']);
        return redirect('/cliente/create')->with('msg',''.$obj->nome.' cadastrado com sucesso!');

    }
}
