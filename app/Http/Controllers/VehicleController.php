<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Category;


use function PHPUnit\Framework\isEmpty;

class VehicleController extends Controller
{
    
    public function list(){
        $allVehicle=Vehicle::all();
        
        return view('vehicle.list',['allVehicle' => $allVehicle]);
    }
    public function create(){
        // $allProtudos = Produto::all();    
        // return view('locadora.create',['allProduto' => $allProtudos]);
        $allCategory = Category::all();
        
        return view('vehicle.create',['allCategory' => $allCategory ]);
    }
    public function store(Request $request){

        $obj = new Vehicle;
        $allVehicle= Vehicle::all();
        
        foreach($allVehicle as $vehicle){
            if($request->placa == $vehicle->placa)
            {
                
                return view('vehicle.create',['msg'=>'Este produto já está cadastrado!']);
            }

        }
        
        $obj->placa = $request->placa;
        $obj->cor = $request->cor;
        $obj->modelo = $request->modelo;
        $obj->fabricante = $request->fabricante;
        $obj->ano = $request->ano;
        $obj->category_nome = $request->category_nome;
        $obj->status = 0;

        $obj->save();

        return redirect('/vehicle/create')->with('msg','['.$obj->modelo.'/'.$obj->placa.'] cadastrado com sucesso');

    }

    public function update(Request $request){
        $data = Vehicle::find($request->id);
        $data->status = 1;
        $data->save();
    }
}
