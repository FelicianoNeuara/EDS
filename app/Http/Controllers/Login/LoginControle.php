<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Validacao;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Lersson;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControle extends Controller
{
    public function login()
    {
        return view('welcome');
    }
    public function autenticacao(Request $validar)
    {
        $validar->validate([
            'email'=> 'required|email',
            'password'=>'required'
        ],[
            'email.required'=>'email é obrigatório',
            'email.email'=>'Email inválido',
            'password.required'=>'password é obrigatório',
        ]);


        //$estudante = Student::where('email', $validar->input('email'))->first();
        $estudante = Student::where('email', $validar->input('email'))
                    ->where('password', $validar->input('password'))
                    ->first();
        $professor = Professor::where('email', $validar->input('email'))
                    ->where('password', $validar->input('password'))
                    ->first();

       // dd($professor, $estudante);

        if ($professor) {
            // O usuário é um professor
            if ($professor->access_level === 'admin') {
                return redirect()->route('home1');
            } elseif ($professor->access_level === 'normal') {
                return redirect()->route('home1');
            } else {
                return redirect()->route('home1');
            }
        } elseif ($estudante) {
            // O usuário é um estudante
            if ($estudante->access_level === 'normal') {
                // Nível de acesso de administrador para estudante
                // Faça as ações apropriadas para estudante com nível de acesso de administrador
                return redirect()->route('home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Email ou Senha inválidas.']);
        }

    }
    public function logout()
    {

        Auth::guard('Estudante')->logout();
        Auth::guard('Professor')->logout();
        return redirect()->route('welcome');
    }
    public function home()
    {

        $curso = Course::all();
        $tipo = CourseCategory::all();
        $professor = Professor::all();
        return view('livewire/home', compact('curso', 'tipo', 'professor'));

    }
    public function curso()
    {

        $curso = Course::all();
        $tipo = CourseCategory::all();
        $professor = Professor::all();
        return view('livewire/curso', compact('curso', 'tipo', 'professor'));

    }
    public function home1()
    {
        $curso= Course::all();

        return view('livewire/home1', compact('curso'));

    }

    public function Menu()
    {

    }
}
