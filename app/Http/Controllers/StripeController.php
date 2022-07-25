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
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function createProduct(Request $request)
    {
        # code...
        $product = Cashier::stripe()->products->create([
            'name' => $request->name,
            'type' => 'service',
            'statement_descriptor' => $request->statement_descriptor,
            'active' => true,
            'metadata' => [
                'description' => $request->description,
            ],
        ]);
        return $product;
    }
}
