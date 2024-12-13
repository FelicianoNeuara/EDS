<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    // public function handle(Request $request, Closure $next, $level)
    // {
    //     // Verifica o nível de acesso do usuário
    //     if ($request->Estudante()->access_level !== $level) {
    //         abort(403, 'Acesso negado.');
    //     }

    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next, $level)
    {
    
        // Verifica o nível de acesso do usuário
        $guard = Auth::guard('Estudante'); // Substitua 'admin' pelo nome correto do seu guard
        $user = $guard->user(); // Obter o usuário autenticado pelo guard
        dd($user);
        if (!$user || $user->access_level !== $level) {
            abort(403, 'Acesso Restrito.');
        }

        return $next($request);
    }

    
    // public function handle($request, Closure $next, $model, $accessField, $level)
    // {
    //     $user = Auth::Student();
    //     dd($user);
        
    //     if (!$user || $user->$accessField !== $level) {
    //         abort(403, 'Acesso negado.');
    //     }

    //     return $next($request);
    // }
    

}
