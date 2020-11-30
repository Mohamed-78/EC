<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class redirector
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->type === "Client") {
            if (Auth::user()->etat === "Activé") {
                return redirect()->route('Client');
            }else{
                Auth::logout();
                session()->flash('messageErreur', '');
                return redirect('/connexion');
            }
        }

        if (Auth::user()->type === "Admin") {
            if (Auth::user()->etat === "Activé") {
                return redirect()->route('Management');
            }else{
                Auth::logout();
                session()->flash('messageErreur', '');
                return redirect('/login');
            }
        }
        
    }
}
