<?php

namespace App\View\Components\Cards;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Feature_card extends Component
{
    /**
     * The alert type.
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
		return view('components.cards.feature_card');
	}
}
