<?php

namespace App\View\Components;

use App\Models\Carousel;
use Illuminate\View\Component;

class Carousels extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $carousels = Carousel::all();
        return view('components.carousels', compact('carousels'));
    }
}
