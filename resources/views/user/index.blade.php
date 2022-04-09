<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
            table {
                width: 50%;
            }
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }

        table.center {
          margin-left: auto; 
          margin-right: auto;
        }
    </style>
</head>
<body>
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
        <div>
            <a href="{{ url('/dashboard') }}" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Dashboard</a>
            <a href="/blogs" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View All Blogs</a>
            <a href="/blog/create" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add a Blog</a>
            <a href="/home" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Home</a>
        </div>
        
        <h1 style="text-align:center" class="mb-5 mt-4">There are {{$blogs->count()}} blogs</h1>

        <div class="row">
            <div class="col-md-12">
                <table class="center">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Content</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @if ($blogs->count()>0)
                            @foreach ($blogs as $blogs)
                                <tr>
                                    <td>{{$blogs->content}}</td>
                                </tr>
                            @endforeach
                        @endif
        
                    
                    </tbody>
                </table>
            </div>
        </div>
    @else
    <P>Please login/Register to view</p>
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>           
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
    @endif
</body>
</html>