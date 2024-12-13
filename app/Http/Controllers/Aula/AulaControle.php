<?php

namespace App\Http\Controllers\Aula;

use App\Http\Controllers\Controller;
use App\Models\Lersson;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class AulaControle extends Controller
{
    public function index(Lersson $aula)
    {
        $aula1 = $aula ->all(); // para pegar todos os dados na base de dados
        return view('livewire/aula/index', compact('aula1'));

    }
    public function enviar()
    {
        $aula=CourseCategory::all();
        
        return view('livewire/aula/cadastro', compact('aula'));

    }
    public function cadastro(Request $request)
    {
        Lersson::create($request->all());
        return redirect()->Route('aula.msg');
    }
    public function msg()
    {
        return view('livewire/aula/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Lersson::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
            $aula=CourseCategory::all();
        return view('livewire/aula/editar', compact('resultado', 'aula'));
    } 
    public function detalhe(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Lersson::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        $aula=CourseCategory::all();
        return view('livewire/aula/detalhe', compact('resultado', 'aula'));
    } 

    public function update(Request $request, Lersson $aula, string $id)
    {
        
        if(!$resultado = $aula ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
    
        $resultado->course_id = $request->course_id;
        $resultado->title = $request->title;
        $resultado->description = $request->description;
        $resultado->date_start = $request->date_start;
        $resultado->status = $request->status;
        $resultado->save();
        
        return redirect()-> Route('aula.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Lersson::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('aula.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/aula/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/aula/msg_D');
    }

}
