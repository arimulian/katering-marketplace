<?php

namespace App\Livewire\Merchant\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $price;
    public $image;

    public function save()
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'description' => ['max:255'],
            'price' => ['required', 'numeric'],
            'image' => ['max:2048'],
        ]);

        $image = null;
        if ($this->image != null) {
            $image = Storage::putFile('images', $this->image);
        }
        Product::query()
        ->create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $image,
            'user_id' => auth()->user()->id ?? null,
        ]);

        session()->flash('status', 'Product created successfully!🤙');
        return redirect()->route('product.list');

    }

    #[Title('Product Create')]
    public function render()
    {
        return view('livewire.merchant.product.create-product');
    }
}
