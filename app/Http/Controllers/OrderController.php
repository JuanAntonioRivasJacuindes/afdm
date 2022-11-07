<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\MonthlyPayment;

use Illuminate\Http\Request;

class OrderController extends Controller
{
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    public static function process(Order $order)
    {

        $user = $order->user;


        if($order->subproduct->type==1){
            $user->inscriptions()->create([
                'product_id'=>$order->subproduct->product->id,
                'status_id'=>1,
            ]);
        }elseif($order->subproduct->type==2){

            $inscription=$user->findInscription($order->subproduct->product_id);

            $pay = MonthlyPayment::create([
                'amount'=>0,
                'inscription_id'=>$inscription->id,
                'voucher'=>'stipe',
                'status_id'=>1,
                'expires_at'=>$inscription->nextPayment(),
            ]);




        }elseif($order->subproduct->type==3){


        }elseif($order->subproduct->type==4){


           $inscription =  $user->inscriptions()->create([
                'product_id'=>$order->subproduct->product->id,
                'status_id'=>1,
            ]);

            $pay = MonthlyPayment::create([
                'amount'=>0,
                'inscription_id'=>$inscription->id,
                'voucher'=>'stipe',
                'status_id'=>1,
                'expires_at'=>Carbon::parse( $order->subproduct->product->productType()->date->starts_at)->addYear(1),
            ]);

        }





        return redirect()->route('dashboard');
    }

}
