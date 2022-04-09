<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif
    @if (Auth::check())
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
    
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
            <h1 class="text-4xl font-bold mb-4">Blogs</h1>

            
            <a href="{{ url('/dashboard') }}" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Dashboard</a>
            {{-- <a href="/blogs" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View All Blogs</a> --}}
            <a href="/home" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Home</a>
            <a href="/blog/create" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add a Blog</a>
            <a href="/user/{user}" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Your Blogs</a>

            @foreach($blogs as $blogs)
                <article class="mb-2">
                    <span class="text-gray-500">
                        <span class='font-bold italic'>{{ $blogs->user->name }} Posted:</span>
                    <p class="text-md text-gray-600">{{ $blogs->content }}</p>

                    <hr class="mt-2">
                </article>
                {{-- @if ($blogs->id)
                <div class='card my-5'>
                    <form action="/blogs/{{ $blogs->id }}/comment" method="POST" class="mb-0" enctype="multipart/form-data">
                        @csrf
                        <textarea name="comment" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm"></textarea>
                        <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Comment</button>
                    </form>
                </div>
                @endif --}}
            @endforeach
        </div>
    @else
                <p style="text-align:center">Please login/Register to view</p>
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
    @endif
    
    
</body>
</html>
