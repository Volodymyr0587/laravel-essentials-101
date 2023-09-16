@extends('app')

@section('content')

    <h1 class="text-lg font-bold m-2">Posts index page</h1>


    @forelse ($posts as $post)
        <x-post-card :post="$post" />
    @empty
        <p class="ml-4">No posts yet</p>
    @endforelse

@endsection