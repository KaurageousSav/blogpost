@section('content')

@foreach ($blogs as $blogs)
    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $blogs->user->name }}</span>
        </span>

        <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $blogs->content }}
            <form action="/blogs/{{ $blogs->id }}/comment" method="POST" class="mb-0">
                @csrf
                <textarea name="comment" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm"></textarea>
                <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Comment</button>
            </form>
        </div>
        <div class="mt-6">
            @foreach ($comments as $comments)
            <div class="mt-3">
                <p>{{ $comment->comment }}</p>
            </div>
            {{-- <span class="text-gray-500">
                <span class='font-bold italic'>{{ $comments->comment }} Posted:</span>
            <p class="text-md text-gray-600">{{ $comments->comment}}</p> --}}
            @endforeach
        </div>
        
    </div> 
@endforeach

{{-- <h2 class="mt-6 text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">Comments</h2> --}}

        {{-- <div>
            <form action="/blogs/{{ $blogs->id }}/comment" method="POST" class="mb-0">
                @csrf
                <textarea name="comment" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm"></textarea>
                <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">Comment</button>
            </form>
        </div> --}}

@endsection 
