<?php

namespace App\View\Components\Icons;

use Illuminate\View\Component;

class Logo extends Component
{
    public function __construct(
        public string $width,
        public string $height,
    ){

    }
    public function render()
    {
        return view('components.icons.logo');
    }
}
