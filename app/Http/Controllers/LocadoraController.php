<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;
use App\Models\Vehicle;
use App\Models\Client;
use App\Models\Category;

use DateTime;
use Illuminate\Support\Facades\Date;

class LocadoraController extends Controller
{
    public function index(){
        return view('locadora.locadoraPage');
    }
    public function create(){
        $allVehicle = Vehicle::all();
        $allClient = Client::all();
        $veiculo = 0;
        $cliente = 0;    
        $contV = 0;
        $contC = 0;
        foreach( $allVehicle as $v){
            if($v->status == 1){
                $contV++;
            }
            $veiculo++;
        }
        foreach(  $allClient as $c){
            if($c->status == 1){
                $contC++;
            }
            $cliente++;
        }
        $checkV = $checkC =0;
        if($contV<$veiculo){
            $checkV = 1;
        }
        if($contC<$cliente){
            $checkC = 1;
        }

        if(($checkV==1)&&($checkC==1)){
            return view('locadora.create',[
                'allVehicle' => $allVehicle,
                'allClient' => $allClient
            ]);
        }
        else{
            echo ("<script>window.alert('Não há Clientes ou Veículos disponíveis!')</script>");
            return view('/locadora/locadoraPage');
        }
    }

    public function list(){
        $allVehicle = Vehicle::all();
        $allClient = Client::all();
        $allProtudos=Produto::all();
        return view('locadora.list',[
            'allVehicle' => $allVehicle,
            'allClient' => $allClient,
            'allProduto' => $allProtudos]);
    }

    public function store(Request $request){
        $allCategory = Category::all();
        $allVehicle = Vehicle::all();
        $allClient = Client::all(); 
        $veiculo = new Vehicle();
        $vehicle = new Vehicle();
        $cliente = new Client();
        $client = new Client();
        $obj = new Produto;
        $date = date("Y-m-d");
        $format = "Y-m-d";
        $d2  = \DateTime::createFromFormat($format, $request->dias);
        $d1  = \DateTime::createFromFormat($format, $date);
        
        if($d2 > $d1)
        {
            $d = new DateTime(date("Y-m-d"));
            $d = $d->diff($d2);
            $dias = $d->days;




            // TRATAMENTO DE STRING VINDO PELO FORMS PARA PEGAR A 'PLACA' E A 'CATEGORIA'
            $veiculo = $request->vehicle;
            $veiculo = explode(' ', $veiculo);
            var_dump($veiculo);
            foreach($allCategory as $category){
                if($category->nome == $veiculo[1]){
                    $diaria = $category->valor;
                }
            }
            foreach($allVehicle as $v){
                if($v->placa == $veiculo[3]){
                    $vehicle = $v;
                }
            }

            // TRATAMENTO DE STRING VINDO PELO FORMS PARA PEGAR O CPF DO CLIENTE
            $cliente = $request->cliente;
            $cliente = explode(' ', $cliente);
            foreach($allClient as $c){
                if($c->cpf == $cliente[3]){
                    $client = $c;
                }
            }


            $obj->inicio = date("Y-m-d");
            
            // $date =  date("Y-m-d");
            // $date = date("Y-m-d",strtotime( "$date +".$request->dias."days" ) );
            
            $obj->final = $request->dias;
            $obj->veiculo_id= $vehicle->id;
            $obj->cliente_id= $client->id;
            $obj->valor = ($dias * $diaria);

            $obj->save();
    


            
            foreach($allVehicle as $v){
                if($v->id == $vehicle->id){
                    
                    $data = $allVehicle->find($v);
                    var_dump($data);
                    $data->status = 1;                   
                    $data->save();
                }
            }
            foreach($allClient as $c){
                if($c->id == $client->id){
                    $data = Client::find($c)->first();
                    $data->status = 1;
                    $data->save();
                }
            }
            return redirect('/locadora/create')->with('msg','['.$client->nome.'/'.$vehicle->placa.'] cadastrado com sucesso');
        }
        else{
            // return view('locadora.create',['msg'=>'Data Invalida!']);
            return redirect('/locadora/create')->with('msg1',' Data Invalida!');
        }
        // return redirect('/locadora/list')->with('msg','Produto cadastrado com sucesso');

    }
}
