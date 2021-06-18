@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                welcome to my blog
            </h1>
        </div>
    
        <div class="pt-10">
            <a 
                href="/posts/create"
                class="border-b-2 pb-2 border-dotted italic text-gray-500">
                Add &rarr;
            </a>
        </div>

        <div class="w-5/6 py-10">
            @foreach ($posts as $post)
                <div class="m-auto">
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <div class="float-right">
                            <a 
                                class="border-b-2 pb-2 border-dotted italic text-blue-500"
                                href="posts/{{ $post->id }}/edit">
                                Edit&rarr;
                            </a>

                            <form action="/posts/{{ $post->id }}" class="pt-3" method="POST">
                                @csrf
                                @method('delete')
                                <button 
                                    type="submit"
                                    class="border-b-2 pb-2 border-dotted italic text-red-500">
                                    Delete&CircleTimes;
                                </button>
                            </form>
                        </div>
                    @endif

                    <h2 class="text-gray-800 text-5xl hover:text-gray-500">
                        <a href="/posts/{{ $post->id }}">
                            &SmallCircle; {{ $post->title }}
                        </a>
                    </h2>

                    <hr class="mt-4 mb-8">
                </div>
            @endforeach
        </div>
    </div>
    @if (Session::has('status'))
        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
            <p>{{ Session::get('status') }}.</p>
        </div>
    @endif 
@endsection