@extends('layouts.app')
@section('content')
<h1 class="page-heading">マイページ</h1>
<p>ようこそ, {{ Auth::user()->name }}さん</p>  <a href="{{ route('posts.create') }}">記事を書く</a>
@include('posts.posts')
@endsection()
