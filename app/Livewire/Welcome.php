<?php

namespace App\Livewire;

use App\Models\product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Welcome extends Component
{
    #[Layout('layouts.welcome')]
    public function render()
    {
        $products = product::with('user')->get();
        return view('livewire.welcome', compact('products'));
    }
}
