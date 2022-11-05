@extends('layouts.app')
@section('content')
<h1 class="page-heading">記事検索</h1>
{{-- <p><a href="{{ route('posts.create') }}">曲を投稿する</a></p>
@foreach ($posts as $post)
<div class="post-item">
    <div class="post-title">
        <a href="{{ route('posts.show', $post) }}">
            {{ $post->artist_name }}
            {{ $post->track_name }}
        </a>
    </div>
</div>
@endforeach --}}
@include('posts.posts')
@endsection()
