<div class="flex justify-between m-2 p-2 bg-slate-100">
    <div>
        <x-post-title :title="$post->title" />
        <p>{{ $post->body }}</p>
    </div>
    <div class="m-2 p-2">
        <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-400 hover:text-blue-600">Edit</a>
    </div>
</div>
