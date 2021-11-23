<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        $allUsers = User::all();
        return view('users.create',['allUsers' => $allUsers]);
    }

    public function list(){
        $allUsers = User::all();
        return view('users.list',['allUsers' => $allUsers]);
    }

    public function store(Request $request){

        $obj = new User;
        $allUsers= User::all();
        
        foreach($allUsers as $users){
            if($request->name == $users->name)
            {
                
                return view('users.create',['msg'=>'Nome inválido!']);
            }

        }
        $obj->name = $request->name;
        $obj->password = $request->password;
        $obj->email = $request->email;


        $obj->save();

        return redirect('/')->with('msg','Seu cadastro foi realizado com SUCESSO!');

    }
}
