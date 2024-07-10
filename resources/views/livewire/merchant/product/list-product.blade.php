<div class="p-10 h-full">
    <div class="mb-4 flex justify-between">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All products</h1>
        <a href="{{route('product.create')}}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4
        focus:ring-primary-300
        font-medium
        rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            Add new product
        </a>
    </div>
    @if(session('status'))
        <div class="bg-green-100 mb-5  border-l-4 border-green-500 text-green-700 p-2" role="alert">
            <p class="font-bold">{{ session('status')}}</p>
        </div>
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            @foreach($products as $key => $product)
            <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$product->name}}
                </th>
                <td class="px-6 py-4">
                    {{Number::currency($product->price, 'IDR', 'id')}}
                </td>
                <td class="px-6 py-4">
                    {{$product->description ?: 'none'}}
                </td>
                <td class="px-6 py-4">
                    @if($product->image)
                        <img src="{{Vite::asset('public/'. $product->image)}}" width="80"
                             height="80" alt="product">
                    @else
                        None
                    @endif
                </td>
                <td class="px-3 py-2 flex space-x-2">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <button wire:click="destroy({{$product->id}})" wire:confirm="Apakah yakin akan di hapus?"
                            class="font-medium
                    text-red-600
                    dark:text-blue-500
                    hover:underline">delete</button>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t
    dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            Showing {{$products->firstItem()}}-{{$products->lastItem()}} of {{ $total}}
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <div class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            {{ $products->links() }}
        </div>
    </div>
</div>
