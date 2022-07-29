<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;
class ActivePayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       $inscription = Inscription::find($request->inscription_id);

        if($inscription->allowAccess() && $inscription->user_id == Auth::user()->id){
            return $next($request);
        }else{
            abort(403);
        }
    }
}
