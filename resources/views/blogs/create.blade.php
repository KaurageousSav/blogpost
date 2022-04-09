<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @if(Route::has('login'))
         @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    {{-- <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> --}}
                </div>
        
                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
        
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @if ($errors->any())
            <div class="w-4/5 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    
            
                <div class="w-4/5 m-auto pt-20">
                    <a href="{{ url('/dashboard') }}" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Dashboard</a>
                    <a href="/blogs" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View All Blogs</a>
                    <a href="/home" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Home</a>
                    <a href="/user/{user}" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Your Blogs</a>
            
                    <form action="/blogs" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name='blog' placeholder="Enter your blog" class="bg-gray-0 block border-b-2 w-full h-20 text-6xl">
                        <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" name="content"></textarea>
                        <button    
                        type="submit"
                        class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Submit Blog
                    </button>
                    </form>
                </div>
        @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
        @endauth
    @endif

    </div>
    
</body>
</html>