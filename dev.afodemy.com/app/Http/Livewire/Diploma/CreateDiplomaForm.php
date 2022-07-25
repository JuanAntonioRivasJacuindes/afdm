<?php

namespace App\Http\Livewire\Diploma;

use Livewire\Component;
use App\Models\Diploma;
use App\Models\Date;
use App\Models\Product;

use App\Models\Status;
use App\Models\Revoe;

use App\Models\PermissionNames;

use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use Livewire\WithFileUploads;

use Spatie\Permission\Models\Permission;

class CreateDiplomaForm extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $flyer;
    public $poster;
    public $stripe_id;
    public $status_id = 2;
    public $starts_at;
    public $ends_at;
    public $revoe;

    protected $rules = [
        'title' => 'required|max:100',
        'description' => 'required',

        'starts_at' => 'required',
        'ends_at' => 'required',
        'revoe'=>'required',
    ];
    public function mount()
    {
      $this->stripe_id= "no_stripe_product";
      // code...
    }
    public function submit()
    {

        $this->validate();
        // Manejo de productos de stripe
        // descomentar al implementar la venta por plataforma
        // $product = Cashier::stripe()->products->create([
        //     'name' => $this->title,
        //     'type' => 'service',
        //     'statement_descriptor' => $this->title,
        //     'active' => true,
        //     'metadata' => [
        //         'description' => $this->description,
        //     ],
        // ]);
        // $this->stripe_id = $product->id;

        $local_product =  Product::create([
            'name' => $this->title,
            'type' => 1,
            'object' => 'diploma',
            'stripe_id' => $this->stripe_id,
        ]);
        $diploma = Diploma::create([
            'title' => $this->title,
            'description' => $this->description,
            // 'flyer' => $this->flyer->store('public/flyers'),
            // 'poster' => $this->poster->store('public/posters'),
            'flyer' =>"flywe",
            'poster' => 'poster',
            'stripe_id' => $this->stripe_id,
            'status_id' => $this->status_id,
            'date_id' =>  Date::create([
                'starts_at' => $this->starts_at,
                'ends_at' => $this->ends_at,
                'status_id' => 1,
            ])->id,
            'product_id' => $local_product->id,
        ]);

        $revoe = Revoe::create([
          'key'=>$this->revoe,
          'register_date'=>null,
          'diploma_id'=>$diploma->id,
        ]);
        $permiso = Permission::create(['name' => 'access_product_' . $diploma->product_id]);
        PermissionNames::create(['product_id' => $local_product->id, 'permission_name' => $permiso->name , 'permission_id' => $permiso->id]);
        return redirect()->route('admin');
    }

    public function render()
    {
        return view('livewire.diploma.create-diploma-form');
    }
}
