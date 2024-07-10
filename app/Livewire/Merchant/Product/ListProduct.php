<?php

namespace App\Livewire\Merchant\Product;

use App\Models\product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class ListProduct extends Component
{
    use WithPagination;

    public function destroy($id)
    {
        $product = Product::query()->where('id', $id)->first();
        $product->delete();
        if ($product->image != null) {
            Storage::delete($product->image);
        }
        session()->flash('status', 'Product has been deleted successfully🤙');
    }
    #[Title('Product List')]
    public function render()
    {
        $products = product::query()->simplePaginate('10');
        $total = Product::query()->count();
        return view('livewire.merchant.product.list-product', compact('products', 'total'));
    }
}
