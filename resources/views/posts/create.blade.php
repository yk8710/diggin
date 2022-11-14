@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('posts.store') }}" method="post">
    @include('posts.form')
    <div class="text-center">
        <div>
            <button type="submit" class="w-full max-w-[550px] bg-blue-500 px-4 py-3 rounded text-gray-200 font-semibold hover:bg-blue-600 transition duration-200 each-in-out">投稿</button>
        </div>
    </div>
    <div class="text-center mt-10">
        <button type="button" class="w-full max-w-[550px] bg-blue-500 px-4 py-3 rounded text-gray-200 font-semibold hover:bg-blue-600 transition duration-200 each-in-out"><a href="{{ route('posts.index') }}">キャンセル</a></button>
    </div>
</form>
@endsection
