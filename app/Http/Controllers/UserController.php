<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;

class UserController extends Controller
{
    public function payments()
    {


       $payments = Cashier::stripe()->charges->all(['customer' =>Auth::user()->stripe_id]);


    //    $portal =  Cashier::stripe()->billingPortal->sessions->create([
    //     'customer' => $user->stripe_id,
    //     'return_url' => route('dashboard'),
    //   ]);

        return view('user.payments',compact('payments'));

    }

    public function invoices(Request $request)
    {

       $payments = Cashier::stripe()->charges->all(['customer' =>Auth::user()->stripe_id]);
      $portal =  Cashier::stripe()->billingPortal->sessions->create([
        'customer' => $request->user()->stripe_id,
        'return_url' => route('dashboard'),
      ]);

      return redirect($portal->url);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function billing(Request $request)
     {
        $user = $request->user();
        $invoices = $user->invoices(['status'=>'open']);
        return view('billing.index',compact('invoices'));
        # code...
     }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
