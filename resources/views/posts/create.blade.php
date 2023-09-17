<x-main-layout>
    <x-slot:header>
        Create new post
    </x-slot:header>

    {{-- <x-card class="bg-indigo-200">

    </x-card> --}}

    <div class="max-w-md mx-auto mt-12">
        <form class="bg-slate-200 p-4" action="{{ route('posts.store') }}" method="post">
            @csrf

            <div class="m-2 p-2">
                <label>Title</label>
                <input type="text" name="title">
            </div>
            <div class="m-2 p-2">
                <label>Body</label>
                <input type="text" name="body">
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
