@extends('layouts.app');


@section('content')
    <h1>Categorie:</h1>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
