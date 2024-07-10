<div class="col-span-full xl:col-auto p-5 max-w-md">
    <div class="flex p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2
    dark:border-gray-700
    sm:p-6 dark:bg-gray-800">
        <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
            <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" src="{{Vite::asset('public/'. $user->image)
            }}">
            <div>
                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">{{$user->name}}</h3>
                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                    {{$user->email}}
                </div>
                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                    {{$user->address}}
                </div>
                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                    {{$user->contact}}
                </div>
                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                    {{$user->description}}
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{route('edit.profile', $user->id)}}" type="button" class="inline-flex items-center px-3
                    py-2 text-sm
                    font-medium
                    text-center
                    text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                       Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>