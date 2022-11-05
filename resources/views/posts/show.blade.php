@extends('layouts.app')
@section('content')
<div class="posts-item">
    <div class="posts-artist-name">{{ $post->artist_name }}</div>
    <div class="posts-track-name">{{ $post->track_name }}</div>
    <div class="posts-album-name">{{ $post->album_name }}</div>
    <div class="posts-label">{{ $post->label }}</div>
    <div class="posts-year">{{ $post->year }}</div>
    <div class="posts-content">{!! nl2br(e($post->content)) !!}</div>
    @can('update', $post)
    <div class="post-control">
        <a href="{{ route('posts.edit', $post) }}">編集</a>
        <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
        </form>
    </div>
    @endcan
</div>
@endsection
