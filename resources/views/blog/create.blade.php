@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-10">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create post
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-2">
        <form action="/posts" method="POST">
            @csrf
            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-96 placeholder-gray-400"
                    name="title"
                    placeholder="Title...">

                <textarea 
                    class="block shadow-5xl mb-10 p-2 placeholder-gray-400 text-lg"
                    name="content"
                    rows="10"
                    cols="44"
                    placeholder="Content..."></textarea>

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-96 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>

    @if ($errors->any())
        <div class="w-4/8 m-auto text-center py-2">
            @foreach ($errors->all() as $error)
                <li class="text-red-500 list-none">
                    {{ $error }}
                </li>
            @endforeach
        </div>
    @endif
@endsection