<?php

namespace App\Http\Controllers\Curso;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class DetalheCursoContole extends Controller
{
    public function detalhe(){

        return view('livewire/curso/sobre/curso_p_grafica');
    }
}
