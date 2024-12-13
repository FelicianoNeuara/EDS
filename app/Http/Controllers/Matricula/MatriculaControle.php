<?php

namespace App\Http\Controllers\Matricula;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Matriculation;

class MatriculaControle extends Controller
{
    public function index(Matriculation $matricula)
    {
        $matricula1 = $matricula ->all(); // para pegar todos os dados na base de dados

        // dd($suporte1); // para divulgar os dados "vardump";

        return view('livewire/matricula/index', compact('matricula1'));
    }
    public function index1(Matriculation $matricula)
    {
      
        $matricula1 = $matricula ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('livewire/matricula/index1', compact('matricula1'));

    }
    public function enviar(string $id)
    {   
        if(!$resultado = Course::find($id)) // buscando os dados do id na base de dados suportes
        {
           // return back(); // para voltar na mesma pagina
        }

        $curso = CourseCategory::all();
        $estudante= Student::all();

        return view('livewire/matricula/cadastro', compact('curso', 'resultado', 'estudante'));
    }
    public function cadastro(Request $request, string $id)
    {
        if(!$resultado = Course::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        // dd($resultado);

        $matricula = Matriculation::create($request->all());
       
       
        $matriculaId = $matricula->id;
    
        $cursoId = $resultado->id; // substitua 1 pelo ID correto do curso


        //dd($cursoId);
       // return redirect()->route('checkout', ['id' => $cursoId]);
       return redirect()->route('checkout', ['matricula_id' => $matriculaId, 'curso_id' => $cursoId]);


    }
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Matriculation::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
            $curso = CourseCategory::all();
            $estudante= Student::all();
           
        return view('livewire/matricula/editar', compact('resultado', 'estudante', 'curso'));
    } 
    public function update(Request $request, Matriculation $matricula, string $id)
    {
        
        if(!$resultado = $matricula ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado-> student_id = $request->student_id;
        $resultado->course_id = $request->course_id;
        $resultado->status = $request->status;
        $resultado->payment_type = $request->payment_type;
        $resultado->save();
        return redirect()-> Route('matricula.msg_A');
    } 
    public function Delete(string|int $id){
        if(!$resultado = Matriculation::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('matricula.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/matricula/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/matricula/msg_D');
    }
    public function msg()
    {
        return view('livewire/matricula/msg');
    } 

}
