<?php

namespace App\Http\Controllers\Professor;
use App\Models\Professor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessorControle extends Controller
{
    public function index(Professor $professor)
    {
      
        $professor1 = $professor ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('livewire/professor/index', compact('professor1'));

    }
    public function enviar()
    {
        return view('livewire/professor/cadastro');

    }
    public function cadastro(Request $request)
    {
        Professor::create($request->all());

        return redirect()->Route('professor.msg');

    }
    public function msg()
    {
        return view('livewire/professor/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Professor::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
           
        return view('livewire/professor/editar', compact('resultado'));
    } 
    public function detalhe(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Professor::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        
        return view('livewire/professor/detalhe', compact('resultado'));
    } 
    public function update(Request $request, Professor $professor, string $id)
    {
        
        if(!$resultado = $professor ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->name = $request->name;
        $resultado->email = $request->email;
        $resultado->contact = $request->contact;
        $resultado->city = $request->city;
        $resultado->country = $request->country;
        $resultado->date_birth = $request->date_birth;
        $resultado->save();
        
        return redirect()-> Route('professor.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Professor::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('professor.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/professor/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/professor/msg_D');
    }


    
}
