<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register✨</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<main class="dark:bg-gray-900">
    <div class="flex justify-center items-center px-6 pt-8 mx-auto md:h-full pt:mt-0 dark:bg-gray-900 my-6">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Create an account
                </h1>
                <form class="space-y-2 md:space-y-3" action="{{route('auth.register')}}" method="post">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Nama</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com">
                        @error('name')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com">
                        @error('email')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Alamat</label>
                        <input type="text" name="address" id="address" placeholder="ex:jakarta" class="bg-gray-50
                        border
                        border-gray-300
                         text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('address')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="contact" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Kontak</label>
                        <input type="text" name="contact" id="contact" placeholder="ex:08xxxxx" class="bg-gray-50
                        border
                        border-gray-300
                         text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('contact')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="contact" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white border border-e border-gray-400 mt-5"></label>
                        <select name="role"
                                class="my-1 block w-full p-2 rounded-md bg-gray-100 text-sm dark:border-gray-600
                        dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                        focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        >
                            <option value="" selected disabled>Pilih sebagai ....</option>
                                <option>Customer</option>
                                <option>Merchant</option>
                        </select>
                        @error('contact')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="{{ route('login') }}" class="font-medium text-primary-600
                        hover:underline
                        dark:text-primary-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
