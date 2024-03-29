<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product_card extends Component
{
    /**
     * The product.
     *
     * @var Product
     */
    public Product $product;

    /**
     * Create the component instance.
     *
     * @return void
     */

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function render():View
	{
		return view('components.product_card');
	}
}
