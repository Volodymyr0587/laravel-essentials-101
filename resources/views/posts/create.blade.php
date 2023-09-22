<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create new post
        </h2>
    </x-slot:header>

    {{-- <x-card class="bg-indigo-200">

    </x-card> --}}

    <div class="max-w-md mx-auto mt-12">
        {{-- ! DISPLAY ALL ERRORS --}}
        {{-- @if ($errors)
            <div class="m-2 p-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form class="bg-slate-200 p-4" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="m-2 p-2">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title') }}">
            </div>
            {{-- ! DISPLAY Title ERRORS --}}
            <div class="m-2 p-2">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="m-2 p-2">
                <label>Image</label>
                <input type="file" name="image">
            </div>
            {{-- ! DISPLAY Image ERRORS --}}
            <div class="m-2 p-2">
                @error('image')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="m-2 p-2">
                <label>Body</label>
                <input type="text" name="body" value="{{ old('body') }}">
            </div>
            {{-- ! DISPLAY Body ERRORS --}}
            <div class="m-2 p-2">
                @error('body')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="m-2 p-2">
                <button type="submit"
                    class="bg-indigo-500 m-2 p-2 hover:bg-indigo-700 text-white rounded">Create</button>
            </div>
        </form>
    </div>
</x-app-layout>
