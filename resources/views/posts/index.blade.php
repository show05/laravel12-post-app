<!-- @extends('layouts.app')

@section('content')
    <h1>投稿一覧</h1>
    <a href="{{ route('posts.create') }}">新規作成</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post->id) }}">編集</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection -->

@extends('layouts.app')

@section('content')
    <h1>投稿一覧</h1>
    {{-- 投稿のループなど --}}
@endsection
