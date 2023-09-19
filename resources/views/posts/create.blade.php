<x-main-layout>
    <x-slot:header>
        Create new post
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
        <form class="bg-slate-200 p-4" action="{{ route('posts.store') }}" method="post">
            @csrf

            <div class="m-2 p-2">
                <label>Title</label>
                <input type="text" name="title">
            </div>
            {{-- ! DISPLAY Title ERRORS --}}
            <div class="m-2 p-2">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="m-2 p-2">
                <label>Body</label>
                <input type="text" name="body">
            </div>
            {{-- ! DISPLAY Body ERRORS --}}
            <div class="m-2 p-2">
                @error('body')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="m-2 p-2">
                <button type="submit" class="bg-indigo-500 m-2 p-2">Create</button>
            </div>
        </form>
    </div>

    <x-slot:footer>
        <div class="mt-12">
            Footer
        </div>
    </x-slot:footer>
</x-main-layout>