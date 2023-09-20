<div class="flex justify-between m-2 p-2 bg-slate-100">
    <div>
        <x-post-title :title="$post->title" />
        <p>{{ $post->body }}</p>
    </div>
    <div class="flex space-x-2 m-2 p-2">
        <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-400 hover:text-blue-600">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="post", onsubmit="return confirm('Are you sure?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-400 hover:text-red-600">Delete</button>
        </form>
    </div>
</div>
