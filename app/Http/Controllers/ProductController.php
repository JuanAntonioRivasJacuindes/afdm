<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\BuyIntent;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Pucharse;
use Laravel\Cashier\Cashier;

class ProductController extends Controller
{
    public function pricing($id)
    {
        $product = Product::find($id);
        $plans = $product->recurrentPlans();
        $prices = $product->totalPrices();

        $inscription = $product->inscription();
        return view('product.pricing', compact('product', 'plans', 'prices', 'inscription'));
    }
    public function checkoutPrice($price_id)
    {
        if(Auth::guest()){
            return(route('login'));
        }
        $user = User::find(Auth::user()->id);
        $cart = $user->cart()->create();
        $price = Plan::find($price_id);

        $cart->addItem($price->id);
        $buy_intent = BuyIntent::create([
            'stripe_id' => 'stripe',
            'user_id' => Auth::user()->id,
            'cart_id' => $cart->id,
            'status_id' => 2,
        ]);

        $checkoutSesion = Cashier::stripe()->checkout->sessions->create([
            "allow_promotion_codes" => true,
            'customer' => Auth::user()->stripe_id,
            'success_url' => route('product.buy_intent.success', $buy_intent->id),
            'cancel_url' => route('product.buy_intent.cancel', $buy_intent->id),
            'line_items' => [
                [
                    'price' => $price->stripe_plan_id,
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
        ]);
        $buy_intent->update([
            'stripe_id' => $checkoutSesion->id,
        ]);

        return redirect($checkoutSesion->url);
    }
    public function checkoutPlan($plan_id)
    {
        if(Auth::guest()){
            return(route('login'));
        }
        $user = User::find(Auth::user()->id);
        $cart = $user->cart()->create();
        $plan = Plan::find($plan_id);
        $product = Product::find($plan->product_id);
        $buy_intent = BuyIntent::create([
            'stripe_id' => 'stripe',
            'user_id' => Auth::user()->id,
            'cart_id' => $cart->id,
            'status_id' => 2,
        ]);
        $checkoutSesion = Cashier::stripe()->checkout->sessions->create([
            'customer' => Auth::user()->stripe_id,
            'success_url' => route('product.buy_intent.success', $buy_intent->id),
            'cancel_url' => route('product.buy_intent.cancel', $buy_intent->id),
            'line_items' => [
                [
                    [
                        'price' => $product->inscription()->stripe_plan_id,
                        'quantity' => 1,
                    ],
                    ['price' => $plan->stripe_plan_id,
                    'quantity' => 1],
                ],
            ],
            'mode' => 'subscription',
        ]);
        $buy_intent->update([
            'stripe_id' => $checkoutSesion->id,
        ]);
        return redirect($checkoutSesion->url);
    }

    public function checkoutCart($cart_id)
    {
        if(Auth::guest()){
            return(route('login'));
        }
        $user = User::find(Auth::user()->id);
        $cart = $user->cart()->create();
        $plan = Cart::find($cart_id);
        $product = Product::find($plan->product_id);
        $buy_intent = BuyIntent::create([
            'stripe_id' => 'stripe',
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'plan_id' => $plan->id,
            'status_id' => 2,
        ]);
        $checkoutSesion = Cashier::stripe()->checkout->sessions->create([
            'customer' => Auth::user()->stripe_id,
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
            'line_items' => [
                [
                    [
                        'price' => 'price_1KVkHvK1HFOOH5etypF2Ym0I',
                        'quantity' => 1,
                    ],
                    [
                        'price' => 'price_1KWO2YK1HFOOH5etwZPyiGgN',
                        'quantity' => 1,
                    ]
                ],
            ],
            'mode' => 'subscription',
        ]);
        return redirect($checkoutSesion->url);
    }


    public function buyIntentSuccess($buy_intent_id)
    {
        $buy_intent = BuyIntent::find($buy_intent_id);
        $buy_intent->update([
            'status_id' => 4,
        ]);
        $this->giveAccessTo($buy_intent->id);
        # code...
    }
    public function buyIntentCancel($buy_intent_id)
    {

        $buy_intent = BuyIntent::find($buy_intent_id);

        $buy_intent->update([
            'status_id' => 5,
        ]);
        return redirect(route('/'));
        # code...
    }
    public function giveAccessTo($buy_intent_id)
    {
        $buy_intent = BuyIntent::find($buy_intent_id);
        $items = $buy_intent->cart->items;
        $user = User::find($buy_intent->user_id);

        foreach ($items as $item) {

            $user->givePermissionTo($item->getProduct()->getPermissionName());

            $pucharse = Pucharse::create([
                'user_id' => $user->id,
                'plan_id' => $item->plan->id,
                'product_id' => $item->getProduct()->id,
                'buy_intent_id' => $buy_intent->id,
            ]);
        }
        return redirect()->route('dashboard');
    }
}
