<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <a href="/blogs" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-black px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View All Blogs</a>
                <a href="/blog/create" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-black px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add a Blog</a>
                <a href="/user/{user}" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-black px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View Your Blogs</a>

            </div>
        </div>
    </div>
</x-app-layout>
