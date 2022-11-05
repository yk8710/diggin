@foreach ($posts as $post)
<div class="post-item">
    <div class="post-title"><a href="{{ route('posts.show', $post) }}">{{ $post->artist_name }}</a></div>
    <div class="post-info">
        {{ $post->created_at }} | {{ $post->user->name }}
    </div>
</div>
@endforeach
