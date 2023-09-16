@extends('app')

@section('content')

    <h1 class="text-lg font-bold m-2">Posts index page</h1>

    {{-- @if (!empty($posts))
        @foreach ($posts as $post)
            <h2 class="ml-4">{{ $post->title }}</h2>
        @endforeach
    @endif --}}

    @forelse ($posts as $post)
        <li class="ml-4">{{ $post->title }}</li>
    @empty
        <p class="ml-4">No posts yet</p>
    @endforelse

@endsection
