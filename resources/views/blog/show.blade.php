@extends('layouts.app')

@section('content')
    <div class="m-auto py-8 text-center">
        <h1 class="bg-blue-300 text-5xl uppercase bold">
            {{ $post->title }}
        </h1>
    </div>
    <div class="mx-24 h-80 p-5 border-solid border-4 border-gray-500 rounded-xl">
        <p>
            {{ $post->content }}
        </p>
    </div>
    <div class="mx-24 h-96 my-4">
        <div class="overflow-x-hidden break-words border-solid border-4 border-gray-500 rounded-xl p-5 w-1/2 h-60">
            @foreach ($post->comments as $comment)
                <p>
                    {{ $comment->comment_content }}
                    <hr class="mt-2 mb-8">
                </p>
            @endforeach
        </div>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            {{-- @method('PUT') --}}
            <input 
            name="comment"
            class="border-solid border-4 border-gray-500 rounded-xl mt-2 p-5 w-1/2 h-10"
            placeholder="Leave a comment...">

            <button type="submit" class="bg-indigo-400 hover:bg-indigo-300 block shadow-5xl mt-2 p-3 w-30 uppercase font-bold">
                Comment  
            </button>
        </form>
    </div>
@endsection