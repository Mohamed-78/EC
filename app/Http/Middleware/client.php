<?php

namespace App\Http\Middleware;

use Closure;

class client
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
        /*if (Auth::user()->type === "Client") {
            if (Auth::user()->etat === "Activé") {
                return redirect()->route('Client');
            }else{
                Auth::logout();
                session()->flash('messageErreur', '');
                return redirect('/login');
            }
        }*/
        
        return $next($request);
    }
}
