<x-main-layout>
    <x-slot:header>
        Update the post
    </x-slot:header>

    <div class="max-w-md mx-auto mt-12">
        <form class="bg-slate-200 p-4" action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="m-2 p-2">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
            </div>
            {{-- ! DISPLAY Title ERRORS --}}
            <div class="m-2 p-2">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="m-2 p-2">
                <label>Body</label>
                <input type="text" name="body" value="{{ old('body', $post->body) }}">
            </div>
            {{-- ! DISPLAY Body ERRORS --}}
            <div class="m-2 p-2">
                @error('body')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="m-2 p-2">
                <button type="submit" class="bg-indigo-500 m-2 p-2">Update</button>
            </div>
        </form>
    </div>

    <x-slot:footer>
        <div class="mt-12">
            Footer
        </div>
    </x-slot:footer>
</x-main-layout>
