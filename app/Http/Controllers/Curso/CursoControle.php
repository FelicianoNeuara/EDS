<?php

namespace App\Http\Controllers\Curso;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Departments;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CursoControle extends Controller
{

    public function index(Course $curso)
    {
        $curso1 = $curso ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

        return view('livewire/Curso/all_curse', compact('curso1'));

    }
    public function enviar()
    {
        $dep = Departments::all();
        $curso= CourseCategory::all();
        $prof= Professor::all();
        return view('livewire/Curso/cadastro', compact('curso', 'dep', 'prof'));

    }

    public function cadastro(Request $request)
    {
        $curso = new Course;

            $curso->category_id = $request->category_id;
            $curso->department_id = $request->department_id;
            $curso->professor_id = $request->professor_id;
            $curso->price = $request->price;
            $curso->duration = $request->duration;
            $curso->date_start = $request->date_start;
            $curso->max_student = $request->max_student;
            $curso->level = $request->level;
            $curso->description = $request->description;

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $requestImagem = $request->file('photo');
            $extension = $requestImagem->getClientOriginalExtension();
            $imageName = $requestImagem->getClientOriginalName();
            $requestImagem->storeAs('public/img/curso', $imageName);
            $curso->photo = $imageName;
        }



        $curso->save();

        return redirect()->Route('curso.msg');
    }

    public function msg()
    {
        return view('livewire/Curso/msg');
    }
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Course::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
            $dep = Departments::all();
            $curso= CourseCategory::all();

        return view('livewire/Curso/editar', compact('resultado', 'dep', 'curso'));
    }
    public function detalhe(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Course::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }

        return view('livewire/Curso/detalhe', compact('resultado'));
    }
    public function update(Request $request, Course $course, string $id)
    {

        if(!$resultado = $course ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->category_id = $request->category_id;
        $resultado->department_id = $request->department_id;
        $resultado->price = $request->price;
        $resultado->duration = $request->duration;
        $resultado->date_start = $request->date_start;
        $resultado->max_student = $request->max_student;
        $resultado->description = $request->description;
        $resultado->level = $request->level;
        // $resultado->photo = $request->photo;

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            if (Storage::exists('public/img/curso/' . $resultado->photo)) {
                Storage::delete('public/img/curso/' . $resultado->photo);
            }
            $requestImagem = $request->file('photo');
            $extension = $requestImagem->getClientOriginalExtension();
            $imageName = $requestImagem->getClientOriginalName();
            $requestImagem->storeAs('public/img/curso', $imageName);
            $resultado->photo = $imageName;
        }



        $resultado->save();

        return redirect()-> Route('curso.msg_A');
    }

    public function Delete(string|int $id){
        if(!$resultado = Course::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('curso.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/curso/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/curso/msg_D');
    }

    ////////////////////////////////////////// Tipo //////////////////////////////////////////////////////

    public function index_tipo(CourseCategory $curso)
    {
        $curso1 = $curso ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

        return view('livewire/Curso/tipo/index', compact('curso1'));

    }
    public function enviar_tipo()
    {

        return view('livewire/Curso/tipo/cadastro');

    }
    public function cadastro_tipo(Request $request)
    {
        CourseCategory::create($request->all());
        return redirect()->Route('curso.msg1');
    }
    public function msg1()
    {
        return view('livewire/Curso/tipo/msg');
    }

    public function delete_tipo(string|int $id){
        if(!$resultado = CourseCategory::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('curso.msg_D1');
    }

    public function msg_D1()
    {
        return view('livewire/curso/tipo/msg_D');
    }

}
