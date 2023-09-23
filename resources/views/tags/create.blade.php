<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create new tag
        </h2>
    </x-slot:header>

    <div class="max-w-md mx-auto mt-12">

        <form class="bg-slate-200 p-4" action="{{ route('tags.store') }}" method="post">
            @csrf

            <div class="m-2 p-2">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            {{-- ! DISPLAY Name ERRORS --}}
            <div class="m-2 p-2">
                @error('name')
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
