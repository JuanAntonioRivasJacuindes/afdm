<?php

namespace App\Http\Livewire\Subproduct;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $product_id;
    public $subProducts;
    public $product;
    public function mount()
    {
        $this->product= Product::find($this->product_id);
        $this->subProducts=$this->product->subproducts;

        # code...
    }
    public function render()
    {
        return view('livewire.subproduct.index');
    }
}
