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
        <div class='pt-15 w-4/5 m-auto'>
            <a href="/blog/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add a Blog</a>
        </div>
    @endif
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
            <h1 class="text-4xl font-bold mb-4">Blogs</h1>

            
            <a href="{{ url('/dashboard') }}" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Dashboard</a>
            <a href="/blogs" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View All Blogs</a>

            @foreach($blogs as $blogs)
                <article class="mb-2">
                    {{-- <a href="/blogs/{{ $blogs->id }}" class="text-xl font-bold text-blue-500">{{ $blogs->content }}</a>  --}}
                    {{-- <a href="/blogs/{{ $blogs->id }}"> --}}
                    <span class="text-gray-500">
                        <span class='font-bold italic'>{{ $blogs->user->name }} Posted:</span>
                    <p class="text-md text-gray-600">{{ $blogs->content }}</p>
                    {{-- </a> --}}

                    <hr class="mt-2">
                </article>
                @if ($blogs->id)
                <div class='card my-5'>
                    {{-- <form action="{{ url('/blogs/$blogs->id/comment') }}" method="POST" class="mb-0" enctype="multipart/form-data> --}}
                    <form action="/blogs/{{ $blogs->id }}/comment" method="POST" class="mb-0" enctype="multipart/form-data">
                        @csrf
                        <textarea name="comment" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm"></textarea>
                        <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Comment</button>
                    </form>
                </div>
                @endif
                {{-- <div class='card my-5'>
                    <form action="{{ url('/blogs/.$blogs->id/comment') }}" method="POST" class="mb-0">
                        @csrf
                        <textarea name="comment" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm"></textarea>
                        <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Comment</button>
                    </form>
                </div> --}}
            @endforeach
        </div>
    
    
</body>
</html>
