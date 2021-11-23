<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function create(){
        // $allProtudos = Produto::all();    
        // return view('locadora.create',['allProduto' => $allProtudos]);
        
        return view('category.create');
    
    }
    public function list(){
        $allCategory = Category::all();   
        return view('category.list',['allCategory' => $allCategory]);
    }
    public function store(Request $request){

        $obj = new Category;
        $allCategory= Category::all();
        
        foreach($allCategory as $category){
            if($request->nome == $category->nome)
            {
                
                return view('category.create',['msg'=>'Este produto já está cadastrado!']);
            }

        }
        
        $obj->nome = $request->nome;
        $obj->valor = $request->valor;

        


        $obj->save();
        // return view('category.create',['msg'=>'Categoria cadastrada com sucesso!']);

        return redirect('/category/create')->with('msg',''.$obj->nome.' cadastrada com sucesso!');

    }
}
