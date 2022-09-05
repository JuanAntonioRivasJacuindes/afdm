<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\BuyIntent;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\Pucharse;
use Laravel\Cashier\Cashier;

class ProductController extends Controller
{
    public function subscriptionCheckout(Request $request)
    {
        dd($request);
        # code...
    }
    public function checkoutProduct(Request $request)
    {
       $user = $request->user();
        if (!$user->stripe_id) {
            $user->createAsStripeCustomer();
        }

       $order =  $user->order()->create([
            'subproduct_id'=>$request->subproduct_id,
            'status_id'=>2,
            'order_id'=>Str::random(20),
        ]);


            return $user->checkout([$request->stripe_id => 1], [
                'success_url' => route('checkout.success',['order_id'=>$order->order_id]),
                'cancel_url' => route('checkout.cancel',['order_id'=>$order->order_id]),
            ]);


    }
    public function subscribe(Request $request)
    {

        return Cashier::stripe()->subscriptions->create([
            'customer' =>$request->user()->stripe_id,
            'collection_method'=> "send_invoice",
            'days_until_due'=> 30,
            'items' => [
              ['price' => $request->stripe_id],
            ],
          ]);
    }
    public function pricing(Request $request)
    {
        $product = Product::find($request->product_id);
        $subproducts= $product->subproducts;

        return view('product.pricing',compact('product','subproducts'));
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


     public function checkoutCancel($order_id)
    {
        $order = Order::where('order_id',$order_id)->first();
        $order->update(['status_id'=>5]);
        return redirect(route('/'))->with('warning-message','Cancelaste la compra');


    }
    public function checkoutSuccess($order_id)
    {
        $order = Order::where('order_id',$order_id)->first();

        $order->update([
            'status_id' => 4,
        ]);
        OrderController::process($order);
        return redirect(route('dashboard'));
        # code...
    }


}
