@extends('layouts.app')
@section('content')
<p><a href="{{ route('posts.create') }}">曲を投稿する</a></p>
@foreach ($posts as $post)
<div class="posts-item">
    <div class="posts-artist-name">{{ $post->artist_name }}</div>
    <div class="posts-track-name">{{ $post->track_name }}</div>
    <div class="posts-album-name">{{ $post->album_name }}</div>
    <div class="posts-label">{{ $post->label }}</div>
    <div class="posts-year">{{ $post->year }}</div>
    <div class="posts-content">{{ $post->content }}</div>
</div>
@endforeach
@endsection
