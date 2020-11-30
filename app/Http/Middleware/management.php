<?php

namespace App\Http\Middleware;

use Closure;

class management
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
        /*f (Auth::user()->type === "Admin") {
            if (Auth::user()->etat === "Activé") {
                return redirect()->route('Management');
            }else{
                Auth::logout();
                session()->flash('messageErreur', '');
                return redirect('/login');
            }
        }*/
        
        return $next($request);
    }
}
