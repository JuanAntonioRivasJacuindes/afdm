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

       //Si el alumno tiene no esta suscrito
       if($inscription->allowAccess()){
           return $next($request);
           //return route('user.suscribe',['product_id'=>$request->product_id]);
        //si el alumno esta suscrito
       }else{

            return redirect(route('user.billing'));


        abort(403, 'No se ha encontrado tu pago ');
       }
     //si tiene una suscripcion externa
    }
}
