@extends('layouts.app')
@section('content')
<h1 class="page-heading">マイページ</h1>
<p>ようこそ, {{ Auth::user()->name }}さん</p> | <a href="{{ route('posts.create') }}">記事を書く</a>
{{-- <p><a href="{{ route('posts.index') }}">記事一覧へ</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">ログアウト</button>
</form> --}}
@include('posts.posts')
@endsection()
