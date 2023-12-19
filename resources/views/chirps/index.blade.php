<!-- resources/views/chirps/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
      <h1 style="padding: 10px;">Add here What is in your mind...</h1>
        @foreach($chirps as $chirp)
            <div class="card mb-2">
                <div class="card-body">
                    <p class="card-text">{{ $chirp->content }}</p>
                      <a href="{{ route('chirps.edit', $chirp) }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Edit</a>
                        <form action="{{ route('chirps.destroy', $chirp) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                </div>
            </div>
        @endforeach

        @auth
            <form action="/chirps" method="post">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" name="content" placeholder="What's happening?"></textarea>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">Chirp</button>
            </form>
        @endauth
    </div>
@endsection
