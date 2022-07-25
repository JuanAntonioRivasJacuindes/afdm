<?php

namespace App\Http\Livewire\Stripe;

use Livewire\Component;
use App\Models\Price;
use App\Models\Product;
use App\Models\Plan;

use Laravel\Cashier\Cashier;
use Illuminate\Http\Request;

class Plans extends Component
{
    public $plans;
    public $product_id;

    public $stripe_product_id;
    public $local_product;

    //create plan variables
    public $name_plan;
    public $plan_description;
    public $plan_amount;

    public function getPlans()
    {
        // dump("funcion getPlans");
    }

    public function mount()
    {
        $this->local_product = Product::find($this->product_id);
        $this->stripe_product_id = $this->local_product->stripe_id;
        $this->plans = $this->getPlans();
    }

    public function createPrice()
    {
        // dump("funcion createPrice");
        $this->validate([
            'name_plan' => 'required',
            'plan_description' => 'required',
            'plan_amount' => 'required',
        ]);


        $stripe_price = Cashier::stripe()->prices->create([
            'unit_amount' => $this->plan_amount*100,
            'currency' => 'mxn',
            'product' => $this->stripe_product_id,
        ]);

        $local_plan = $this->local_product->plans()->create([
            'plan_name' => $this->name_plan,
            'plan_description' => $this->plan_description,
            'stripe_plan_id' => $stripe_price->id,
            'amount' =>$this->plan_amount,
            'price_type' => 2,
        ]);

        $this->limpiarCampos();
        session()->flash('message', 'Precio guardado de manera exitosa.');
    }

    public function createPlan()
    {

        $this->validate([
            'name_plan' => 'required',
            'plan_description' => 'required',
            'plan_amount' => 'required|numeric',
        ]);

        $stripe_plan = Cashier::stripe()->prices->create([
            'nickname' => 'Mensualidad',
            'unit_amount' => $this->plan_amount * 100,
            'currency' => 'mxn',
            'recurring' => ['interval' => 'month'],
            'product' => $this->stripe_product_id,
            'metadata' => [
                'description' => 'Mensualidad de '.$this->name_plan,
            ],
        ]);
        $local_plan = $this->local_product->plans()->create([
            'plan_name' => $this->name_plan,
            'plan_description' => $this->plan_description,
            'stripe_plan_id' => $stripe_plan->id,
            'amount' =>$this->plan_amount,
            'price_type' => 1,
        ]);
        $this->plans = $this->local_product->plans;
        $this->render();
        $this->limpiarCampos();
        session()->flash('message', 'Plan mensual guardado de manera exitosa.');
    }
    public function createInscription()
    {

        $this->validate([

            'plan_amount' => 'required|numeric',
        ]);

        $stripe_price = Cashier::stripe()->prices->create([
            'nickname' => 'Inscripción',
            'unit_amount' => $this->plan_amount*100,
            'currency' => 'mxn',
            'product' => $this->stripe_product_id,
        ]);

        $local_plan = $this->local_product->plans()->create([
            'plan_name' => 'Inscripción',
            'plan_description' => 'Inscripción de '.$this->local_product->name,
            'stripe_plan_id' => $stripe_price->id,
            'amount' =>$this->plan_amount,
            'price_type' => 3,
        ]);
        $this->plans = $this->local_product->plans;
        $this->render();
        $this->limpiarCampos();
        session()->flash('message', 'Se guardó el precio de inscripción de manera exitosa.');
    }
    public function deletePlan($plan_id)
    {
        $plan = Plan::find($plan_id);
        Cashier::stripe()->plans->delete(
            $plan->stripe_plan_id,

        );

        $plan->delete();

        session()->flash('message', 'Precio eliminado de manera exitosa.');
    }
    public function deletePrice($plan_id)
    {
        $plan = Plan::find($plan_id);
        $price = Cashier::stripe()->prices->retrieve($plan->stripe_plan_id);
        Cashier::stripe()->prices->delete(
            $plan->stripe_plan_id,
        );
        $plan->delete();
        session()->flash('message', 'Precio eliminado de manera exitosa.');
    }
    public function limpiarCampos()
    {

        $this->name_plan = null;
        $this->plan_description = null;
        $this->plan_amount = null;

        # code...
    }

    public function render()
    {
        $this->plans = Plan::where('product_id', $this->local_product->id)->get();
        return view('livewire.stripe.plans');
    }
}
