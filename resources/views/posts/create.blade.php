@extends('layouts.app')

@section('content')
    <h1>新規投稿</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>タイトル：</label>
        <input type="text" name="title"><br>
        <label>内容：</label>
        <textarea name="body"></textarea><br>
        <button type="submit">投稿</button>
    </form>
@endsection
