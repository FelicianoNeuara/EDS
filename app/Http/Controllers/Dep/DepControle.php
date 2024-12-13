<?php

namespace App\Http\Controllers\Dep;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepControle extends Controller
{
    public function index(Departments $dep)
    {
        $dep1 = $dep ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

        return view('livewire/dep/index', compact('dep1'));

    }
    public function enviar()
    {
        
        return view('livewire/dep/cadastro');

    }
    public function cadastro(Request $request)
    {
        Departments::create($request->all());
        return redirect()->Route('dep.msg');
    }
    public function msg()
    {
        return view('livewire/dep/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Departments::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
           
        return view('livewire/dep/editar', compact('resultado'));
    } 

    public function update(Request $request, Departments $dep, string $id)
    {
        
        if(!$resultado = $dep ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->name = $request->name;
        $resultado->head_dept = $request->head_dept;
        $resultado->starting_date = $request->starting_date;
        $resultado->save();
        
        return redirect()-> Route('dep.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Departments::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('dep.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/dep/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/dep/msg_D');
    }



}
