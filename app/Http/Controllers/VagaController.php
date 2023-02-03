<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vaga;

class VagaController extends Controller
{
    public function index()
    {
        $row = (Vaga::paginate(5));
        $this->view['row'] = $row;
               return view("vagas.lista", $this->view);
    }
    

    public function create()
    {
        return view("vagas.create");//mostrar formulário
    }

    public function store(Request $request)
    { 
        //dd($request->all());
        Vaga::create($request->only(["tipo", "nome", "descricao"]));
       
        return redirect()->route("vagas.index");
    
    }

    public function edit($id)
    {
        $vaga = Vaga::find($id);
        $tipos = [
            ["value"=>"CLT","name"=>"CLT"],
            ["value" => "PJ", "name" => "Pessoa Jurídica"],
            ["value" => "Frelancer", "name" => "Freelancer"]
        ];
        return view("vagas.editar",['vaga'=>$vaga,'tipos'=>$tipos]);//mostrar formulário
    }
    public function update($id)
    {
        $vaga = Vaga::find($id);
        $tipos = [
            ["value"=>"CLT","name"=>"CLT"],
            ["value" => "PJ", "name" => "Pessoa Jurídica"],
            ["value" => "Frelancer", "name" => "Freelancer"]
        ];
        return view("vagas.update",['vaga'=>$vaga,'tipos'=>$tipos]);//mostrar formulário
    }

    public function destroy($id)
    {
        $vaga = Vaga::find($id)->delete();
        return redirect()->back();
    }
}