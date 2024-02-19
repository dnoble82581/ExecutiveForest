<?php

namespace App\Livewire;

use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

    public ProductForm $form;

    public string $alt_text;

    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];

    public function save()
    {
        $validated = $this->form->validate();
        $newProduct = Product::create($validated);

        if ($this->photos)
            foreach ($this->photos as $photo) {
                $image = $photo->store('Products', 's3');
                ProductImage::create([
                    'product_id' => $newProduct->id,
                    'name' => $image,
                    'image' => "https://executiveforest.s3.amazonaws.com/" . $image,
                    'alt_text' => $this->alt_text
                ]);
            }
    }


    public function render()
    {
        return view('livewire.create-product');
    }
}
