{{-- @extends('app')

@section('content') --}}
<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot:header>

    <x-card class="bg-indigo-200">
        @forelse ($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <p class="ml-4">No posts yet</p>
        @endforelse
    </x-card>


</x-app-layout>

{{-- @endsection --}}
