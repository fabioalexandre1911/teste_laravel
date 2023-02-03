<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidato;

class CandidatoController extends Controller
{
    public function index()
    {
        $paginacao = (Candidato::paginate(5));
        $this->view['paginacao'] = $paginacao;
               return view("candidatos.lista", $this->view);
    }
    

    public function create()
    {
        return view("candidatos.create");//mostrar formulário
    }

    public function store(Request $request)
    { 
        //dd($request->all());
        $candidato = new Candidato();

        $candidato->nome = $request->nome;   
        $candidato->email = $request->email;
        $candidato->curriculo_url = $request->curriculo_url;
        $candidato->save();
        //$candidato::get()->paginate(10);
        //$paginacao = $candidato::get()->();
        //(Candidato::paginate(5));
        $paginacao = (Candidato::paginate(5));
        $this->view['paginacao'] = $paginacao;
       // Redirecionar de volta para a página de origem
       //return redirect()->back()->with('success', 'Candidato adicionado com sucesso!');
       return view("candidatos.lista", $this->view);
    
    }

    public function edit($id)
    {
         
        $candidato = Candidato::find($id);
        return view("candidatos.create",['candidato'=>$candidato]);//mostrar formulário
    }

    public function destroy($id)
    {
        $candidato = Candidato::find($id)->delete();
        return redirect()->back();
    }
}