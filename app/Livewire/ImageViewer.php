<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ImageViewer extends Component
{
    public Product $product;
    public $currentImage;

    public function mount()
    {
        $this->currentImage = $this->product->images()->first()->image;
    }
    public function render()
    {
        return view('livewire.image-viewer');
    }

    public function swap($image){
        $this->currentImage = $image;
    }
}
