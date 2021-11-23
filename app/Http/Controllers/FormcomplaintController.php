<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\FormComplaint;

class FormcomplaintController extends Controller
{
    public function create(){
          
        return view('formComplaint.create');
    }

    public function store(Request $request){
        $obj = new FormComplaint;    
        $add = new Address;

        $obj->name = $request->name;
        $obj->cpf = $request->cpf;
        $obj->rg = $request->rg;
        $obj->rua = $request->rua;
        $obj->bairro = $request->bairro;
        $obj->cidade = $request->cidade;
        $obj->description = $request->description;
        
        $add->rua = $request->rua;
        $add->bairro = $request->bairro;
        $add->cidade = $request->cidade;
        
        //IMAGE UPLOAD
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now").".".$extension);
            $request->image->move(public_path('img/formComplaints'), $imageName);
            $obj->image = $imageName;

        }
        $format = "d/m/y";
        
        $date1  = \DateTime::createFromFormat($format, $request->dateStart);
        $date2  = \DateTime::createFromFormat($format, $request->dateFinal);
        


        if($date1 > $date2){
            return view('formComplaint.create',['msg'=>'Data inválido!']);
        }
        

        


        $obj->dateStart = $request->dateStart;
        $obj->dateFinal = $request->dateFinal;
        


        $obj->save();
        $add->save();

        return redirect('/formComplaint/create')->with('msg','Formulário cadastrado com sucesso');
    }

}
