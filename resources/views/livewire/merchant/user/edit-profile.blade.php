<div class="p-5">
<div class="col-span-2 xl:col-auto">
    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
        <form wire:submit="update">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input wire:model="name" type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50
                    border
                    border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500
                    focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500
                    dark:focus:border-primary-500" placeholder="Bonnie" required value="{{$user->name}}"/>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Email</label>
                    <input wire:model="email" type="text" name="country" id="country" class="shadow-sm bg-gray-50 border
                    border-gray-300
                     text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full
                      p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                      dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="United States"
                           value="{{$user->email}}"/>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input wire:model="address" type="text" name="address" id="address" class="shadow-sm bg-gray-50
                    border
                    border-gray-300
                     text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full
                      p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                      dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. California"
                           value="{{$user->address}}">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Description</label>
                    <textarea wire:model="description" type="text" name="description" id="description" class="shadow-sm
                    bg-gray-50
                    border
                    border-gray-300
                    text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full
                    p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                    dark:focus:ring-primary-500 dark:focus:border-primary-500">{{$user->description}}</textarea>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-white">Image</label>
                    <input wire:model="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg
            cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  type="file">
                </div>
            </div>
            <div class="col-span-6 mt-10 sm:col-full flex space-x-3">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Save all</button>
                <a href="{{route('profile', $user->id)}}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4
                    focus:ring-red-300
                    font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600
                    dark:hover:bg-red-700 dark:focus:ring-red-800" type="submit">Back</a>
            </div>
        </form>
    </div>
</div>
</div>
