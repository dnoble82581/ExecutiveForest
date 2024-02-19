<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ProductForm extends Form
{
	#[Rule(['required'])]
	public $name = '';

	#[Rule(['required','unique:products'])]
	public $slug = '';

	#[Rule(['required'])]
	public $long_description = '';

	#[Rule(['nullable'])]
	public $short_description = '';

	#[Rule(['nullable'])]
	public $material_finish = '';

	#[Rule(['required', 'numeric'])]
	public $price = '';

	#[Rule(['required', 'numeric'])]
	public $sale_price = '';

	#[Rule(['integer'])]
	public $quantity = '';

	#[Rule(['boolean'])]
	public $status = '';

	#[Rule(['boolean'])]
	public $on_sale = '';

	#[Rule(['nullable'])]
	public $meta_title = '';

	#[Rule(['nullable'])]
	public $meta_keyword = '';

	#[Rule(['nullable'])]
	public $meta_description = '';

    #[Rule(['nullable'])]
    public $sku;

    #[Rule(['nullable'])]
    public $dimensions;
}
