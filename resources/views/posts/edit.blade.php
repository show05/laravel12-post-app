@extends('layouts.app')

@section('content')
    <h1>投稿編集</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>タイトル：</label>
        <input type="text" name="title" value="{{ $post->title }}"><br>
        <label>内容：</label>
        <textarea name="body">{{ $post->body }}</textarea><br>
        <button type="submit">更新</button>
    </form>
@endsection
