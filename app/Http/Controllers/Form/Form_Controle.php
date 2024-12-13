<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class Form_Controle extends Controller
{
    public function footer()
    {
        return view('livewire/footer');
    }

    public function header()
    {
        return view('livewire/header');
    }

    public function header1()
    {
        return view('livewire/header1');
    }

    public function index(Request $request)
    {
        // Parâmetros de ordenação recebidos da requisição
        $sortColumn = $request->get('sort_column', 'name'); // Coluna padrão: name
        $sortDirection = $request->get('sort_direction', 'asc'); // Direção padrão: asc

        // Validar as colunas permitidas para evitar SQL Injection
        $validColumns = ['name', 'email', 'contact', 'city', 'country', 'registration_date'];
        $sortColumn = in_array($sortColumn, $validColumns) ? $sortColumn : 'name';
        $sortDirection = in_array($sortDirection, ['asc', 'desc']) ? $sortDirection : 'asc';

        // Consultar os dados ordenados
        $student1 = Student::orderBy($sortColumn, $sortDirection)->paginate(10);

        // Passar os dados e os parâmetros para a view
        return view('livewire/estudante/index', compact('student1', 'sortColumn', 'sortDirection'));
    }

    public function enviar()
    {
        return view('livewire/estudante/cadastro');
    }

    public function cadastro(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('estudante.msg');
    }

    public function msg()
    {
        return view('livewire/estudante/msg');
    }

    public function editar(string|int $id)
    {
        if (!$resultado = Student::find($id)) {
            return back();
        }

        return view('livewire/estudante/editar', compact('resultado'));
    }

    public function detalhe(string|int $id)
    {
        if (!$resultado = Student::find($id)) {
            return back();
        }

        return view('livewire/estudante/detalhe', compact('resultado'));
    }

    public function update(Request $request, Student $student, string $id)
    {
        if (!$resultado = $student->find($id)) {
            return back();
        }

        $resultado->update($request->all());
        return redirect()->route('estudante.msg_A');
    }

    public function Delete(string|int $id)
    {
        if (!$resultado = Student::find($id)) {
            return back();
        }

        $resultado->delete();
        return redirect()->route('estudante.msg_D');
    }

    public function msg_A()
    {
        return view('livewire/estudante/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/estudante/msg_D');
    }

    public function perfil()
    {
        return view('livewire.estudante.perfil');
    }
}
