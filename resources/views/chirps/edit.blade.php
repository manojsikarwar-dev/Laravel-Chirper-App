@extends('layouts.app')

@section('content')
      <h1 style="padding: 10px;">Edit Chirps</h1>

    <form action="{{ route('chirps.update', $chirp) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <textarea class="form-control" name="content">{{ $chirp->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Chirp</button>
    </form>
@endsection
