<div class="p-10">
        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Add products</h1>
    <div class="bg-gray-200 px-3 py-5 max-w-md mx-auto rounded-lg">
    <form wire:submit="save" class="max-w-sm mx-auto">
        <div class="mb-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" wire:model="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
            @error('name')
            <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="text" wire:model="price" id="price" class="shadow-sm bg-gray-50 border border-gray-300
            text-gray-900
            text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
            @error('price')
            <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900
            dark:text-white">Description</label>
            <textarea type="text" wire:model="description" id="description" class="shadow-sm bg-gray-50 border
            border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
            dark:focus:border-blue-500 dark:shadow-sm-light"></textarea>
            @error('description')
            <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900
            dark:text-white">Image</label>
            <input wire:model="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg
            cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  type="file">
            @error('image')
            <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex items-start mb-5 space-x-3">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
            focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600
            dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none
            focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600
            dark:hover:bg-red-700 dark:focus:ring-blue-800">back</button>
        </div>
    </form>
    </div>
</div>
