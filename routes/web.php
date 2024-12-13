<?php

use App\Http\Controllers\Aula\AulaControle;
use App\Http\Controllers\Curso\CursoControle;
use App\Http\Controllers\dep\DepControle;
use App\Http\Controllers\Curso\DetalheCursoContole;
use App\Http\Controllers\Login\LoginControle;
use App\Http\Controllers\Matricula\MatriculaControle;
use App\Http\Controllers\PdfControle;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\Form_Controle;
use App\Http\Controllers\Professor\ProfessorControle;
use App\Http\Middleware\CheckAccessLevel;


//========================= Autenticação de Login ========================================
Route::get('/', [LoginControle::class,'login'])-> name('welcome');
Route::get('/Logout', [LoginControle::class,'logout'])-> name('login.logout');
Route::post('/autenticacao', [LoginControle::class,'autenticacao'])-> name('login.autenticacao');



Route::get('/home', [LoginControle::class,'home'])-> name('home');
Route::get('/Curso/View', [LoginControle::class,'curso'])-> name('curso.view');

Route::get('/home/professor', [LoginControle::class,'home1'])-> name('home1');
// =============== estudante ====================
Route::get('/cadastro', [Form_Controle::class, 'enviar'])->name('estudante.enviar');
Route::get('/estudante', [Form_Controle::class, 'index'])->name('estudante.index');
Route::get('/estudante/detalhe/{id}', [Form_Controle::class, 'detalhe'])->name('estudante.detalhe');
Route::get('/estudante/editar/{id}', [Form_Controle::class, 'editar'])->name('estudante.editar');
Route::get('/estudante/modificar1/{id}', [Form_Controle::class, 'modificar1'])->name('estudante.modificar1');
Route::get('/estudante/delete/{id}', [Form_Controle::class, 'delete'])->name('estudante.delete');
Route::put('/estudante/modificar/{id}', [Form_Controle::class, 'update'])->name('estudante.update');
Route::post('/estudante/cadastro', [Form_Controle::class, 'cadastro'])->name('estudante.cadastro');
Route::get('/Perfil', [Form_Controle::class, 'perfil'])->name('estudante.perfil');
Route::get('/msg', [Form_Controle::class, 'msg'])->name('estudante.msg');
Route::get('/msg_A', [Form_Controle::class, 'msg_A'])->name('estudante.msg_A');
Route::get('/msg_D', [Form_Controle::class, 'msg_D'])->name('estudante.msg_D');


// -==============================================================================-
// =============== Professor ====================
Route::get('/professor/cadastro', [ProfessorControle::class,'enviar'])->name('professor.enviar');;
Route::get('/professor', [ProfessorControle::class,'index'])->name('professor.index');
Route::get('/professor/detalhe/{id}', [ProfessorControle::class,'detalhe'])->name('professor.detalhe');
Route::get('/professor/editar/{id}', [ProfessorControle::class,'editar'])->name('professor.editar');
Route::get('/professor/modificar1/{id}', [ProfessorControle::class,'modificar1'])->name('professor.modificar1');
Route::get('/professor/delete/{id}', [ProfessorControle::class,'delete'])->name('professor.delete');
Route::put('/professor/modificar/{id}', [ProfessorControle::class,'update'])->name('professor.update');
Route::post('/professor/cadastro', [ProfessorControle::class,'cadastro'])->name('professor.cadastro');
Route::get('/msg', [ProfessorControle::class,'msg'])->name('professor.msg');
Route::get('/msg_A', [ProfessorControle::class,'msg_A'])->name('professor.msg_A');
Route::get('/msg_D', [ProfessorControle::class,'msg_D'])->name('professor.msg_D');
// -==============================================================================-

// =============== Matricula ===================
Route::get('/Matricula', [MatriculaControle::class,'index'])->name('matricula.index');
Route::get('/Matricula/E', [MatriculaControle::class,'index1'])->name('matricula.index1');
Route::get('/Matricula/Enviar/{id}', [MatriculaControle::class,'enviar'])->name('matricula.enviar');
Route::post('/Matricula/cadastro/{id}', [MatriculaControle::class,'cadastro'])->name('matricula.cadastro');
Route::get('/Matricula/editar/{id}', [MatriculaControle::class,'editar'])->name('matricula.editar');
Route::get('/Matricula/delete/{id}', [MatriculaControle::class,'delete'])->name('matricula.delete');
Route::put('/Matricula/modificar/{id}', [MatriculaControle::class,'update'])->name('matricula.update');

Route::get('/Matricula/msg', [MatriculaControle::class,'msg'])->name('matricula.msg');
Route::get('/Matricula/msg_A', [MatriculaControle::class,'msg_A'])->name('matricula.msg_A');
Route::get('/Matricula/msg_D', [MatriculaControle::class,'msg_D'])->name('matricula.msg_D');
// -==============================================================================-

// =============== Curso        ====================
Route::get('/Curso', [CursoControle::class,'index'])->name('curso.index');
Route::get('/Curso/Enviar', [CursoControle::class,'enviar'])->name('curso.enviar');
Route::post('/Curso/cadastro', [CursoControle::class,'cadastro'])->name('curso.cadastro');
Route::get('/Curso/detalhe/{id}', [CursoControle::class,'detalhe'])->name('curso.detalhe');
Route::get('/Curso/editar/{id}', [CursoControle::class,'editar'])->name('curso.editar');
Route::get('/Curso/delete/{id}', [CursoControle::class,'delete'])->name('curso.delete');
Route::put('/Curso/modificar/{id}', [CursoControle::class,'update'])->name('curso.update');



Route::get('/Curso/Tipo', [CursoControle::class,'index_tipo'])->name('curso.index_tipo');
Route::get('/Curso/Tipo/Enviar', [CursoControle::class,'enviar_tipo'])->name('curso.enviar_tipo');
Route::post('/Curso/Tipo/cadastro', [CursoControle::class,'cadastro_tipo'])->name('curso.cadastro_tipo');
Route::get('/Curso/Tipo/delete/{id}', [CursoControle::class,'delete_tipo'])->name('curso.delete_tipo');
Route::get('/Curso/Tipo/editar/{id}', [CursoControle::class,'editar_tipo'])->name('curso.editar_tipo');
Route::put('/Curso/Tipo/modificar/{id}', [CursoControle::class,'update_tipo'])->name('curso.update_tipo');

Route::get('/Curso/msg', [CursoControle::class,'msg'])->name('curso.msg');
Route::get('/Curso/msg_A', [CursoControle::class,'msg_A'])->name('curso.msg_A');
Route::get('/Curso/msg_D', [CursoControle::class,'msg_D'])->name('curso.msg_D');
Route::get('/Curso/Tipo/msg', [CursoControle::class,'msg1'])->name('curso.msg1');
Route::get('/Curso/Tipo/msg_A', [CursoControle::class,'msg_A1'])->name('curso.msg_A1');
Route::get('/Curso/Tipo/msg_D', [CursoControle::class,'msg_D1'])->name('curso.msg_D1');
// -==================== Sobre Curso ======================-

Route::get('/Detalhe/Curso', [DetalheCursoContole::class,'detalhe'])->name('detalhe.curso');

// -==============================================================================-

// =============== Departamento        ====================
Route::get('Dep', [DepControle::class,'index'])->name('dep.index');
Route::get('Dep/Enviar', [DepControle::class,'enviar'])->name('dep.enviar');
Route::post('Dep/cadastro', [DepControle::class,'cadastro'])->name('dep.cadastro');
Route::get('Dep/editar/{id}', [DepControle::class,'editar'])->name('dep.editar');
Route::get('Dep/delete/{id}', [DepControle::class,'delete'])->name('dep.delete');
Route::put('Dep/modificar/{id}', [DepControle::class,'update'])->name('dep.update');

Route::get('Dep/msg', [DepControle::class,'msg'])->name('dep.msg');
Route::get('Dep/msg_A', [DepControle::class,'msg_A'])->name('dep.msg_A');
Route::get('Dep/msg_D', [DepControle::class,'msg_D'])->name('dep.msg_D');
// -==============================================================================-
// ===============                     Aula        ====================
Route::get('Aula', [AulaControle::class,'index'])->name('aula.index');
Route::get('Aula/Enviar', [AulaControle::class,'enviar'])->name('aula.enviar');
Route::post('Aula/cadastro', [AulaControle::class,'cadastro'])->name('aula.cadastro');
Route::get('/Aula/detalhe/{id}', [AulaControle::class,'detalhe'])->name('aula.detalhe');
Route::get('Aula/editar/{id}', [AulaControle::class,'editar'])->name('aula.editar');
Route::get('Aula/delete/{id}', [AulaControle::class,'delete'])->name('aula.delete');
Route::put('Aula/modificar/{id}', [AulaControle::class,'update'])->name('aula.update');

Route::get('Aula/msg', [AulaControle::class,'msg'])->name('aula.msg');
Route::get('Aula/msg_A', [AulaControle::class,'msg_A'])->name('aula.msg_A');
Route::get('Aula/msg_D', [AulaControle::class,'msg_D'])->name('aula.msg_D');
// -==============================================================================-
Route::get('/RelatorioPDF', [PdfControle::class, 'gerarpdf'])->name('gerar.relatorio');

// Route::get('/checkout/{id}', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/checkout/{matricula_id}/{curso_id}', [StripeController::class, 'checkout'])->name('checkout');

Route::post('/session/{id}', [StripeController::class, 'session'])->name('session');
Route::get('/Cancelamento', [StripeController::class, ' cancelamento'])->name('cancelamento');
Route::get('/success/{matricula_id}', [StripeController::class, 'success'])->name('success');



