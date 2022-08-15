<?php

namespace App\Http\Controllers;

use Laravel\Cashier\Cashier;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;

class StripeController extends Controller
{
  public function CreatePrice(Request $request)
  {

    try {
        Cashier::stripe()->prices->create([
            'unit_amount' => $request->amount,
            'currency' => $request->currency,
            'product' => $request->product,
          ]);
          session()->flash('success-message', 'Precio Agregado Correctamente');
    } catch (\Throwable $th) {
        session()->flash('danger-message', 'No se ha podido agregar');

    }
      return redirect()->back();
  }
    public function stripe()
    {
        return view('stripe');
    }
    public function addPaymentMethod($pid)
    {
      dd($pid);
        $user = User::find(Auth::user()->id);
        dd($user->paymentMethods);
        return redirect()->route('profile.show');
    }
    public function createSubscription(Request $request)
    {
        //contenido del request [user:id, stripe_id del producto ]

        $user = User::find(Auth::user()->id);
        $paymentMethod = $user->defaultPaymentMethod();
        $user->newSubscription('prod_KkQV008xpCGgJW', 'price_1K4veJK1HFOOH5et7fIRTnGK')->create($paymentMethod->id);
        return redirect()->route('profile.show');
    }

    public function deletePaymentMethod($pid)
    {
        # code...

        $user = User::find(Auth::user()->id);
        $user->deletePaymentMethods($pid);
    }
    public function getProducts()
    {
        # code...
        $products = Cashier::stripe()->products->all();
        return $products;
    }
    function getPlans()
    {
        # code...
        $plans = Cashier::stripe()->plans->all();
        return $plans;
    }
    public function getSubscriptions()
    {
        # code...
        $subscriptions = Cashier::stripe()->subscriptions->all();
        return $subscriptions;
    }
    public function unarchivePrice(Request $request)
    {
        try {
            Cashier::stripe()->prices->update(
                $request->plan_id,
                ['active' => true]
              );
             session()->flash('success-message','El precio se ha Desarchivado');

        } catch (\Throwable $th) {
            session()->flash('danger-message','No se ha podido Desarchivar');
        }
        return redirect()->back();

    }
    public function deleteOrArchivePrice(Request $request)
    {
        try {
            $price=Cashier::stripe()->prices->delete($request->plan_id);
            session()->flash('success-message','Eliminado con exito');
        } catch (\Throwable $th) {

            try {
                Cashier::stripe()->prices->update(
                    $request->plan_id,
                    ['active' => false]
                  );
                 session()->flash('success-message','El precio se ha archivado');

            } catch (\Throwable $th) {
                session()->flash('danger-message','No se ha podido archivar');
            }
        }

        return redirect()->back();
        # code...
    }
    public static function createProduct(Request $request)
    {

        $product = Cashier::stripe()->products->create([
            'name' => $request->name,
            'type' => 'service',
            'statement_descriptor' => $request->name,
            'active' => true,
            'metadata' => [
                'description' => $request->description,
            ],
        ]);
        return $product;
    }
}
