<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    
     
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
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>  --}}
                        {{-- <form method="POST" action="/blogs" enctype="multipart/form-data">
                            {{-- value={{Auth::user()->id}} --}}
                            {{-- @csrf
                            <div class="mb-4">
                                <label class="font-bold text-gray-800" for="content">Content: </label>
                                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content"></textarea>
                            </div>
                
                            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
                            <a href="/blogs" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>  --}}

    </div>
    <div class="w-4/5 m-auto pt-20">
        <a href="{{ url('/dashboard') }}" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Dashboard</a>
        <a href="/blogs" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View All Blogs</a>
        <a href="/home" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Home</a>

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
</body>
</html>