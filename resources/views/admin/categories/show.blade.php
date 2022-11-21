@extends('layouts.app');

@section('content')
    <h1>Posts:</h1>

    <ul>
        @foreach ($posts as $post)
            @if ($post->category_id == $category->id)
                <li><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></li>
            @endif
        @endforeach
    </ul>
@endsection
