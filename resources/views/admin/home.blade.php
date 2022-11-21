@extends('layouts.app');

@section('content')
    <h1 class="text-center text-uppercase py-5 text-primary">Posts</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-success mx-2" href="{{ route('admin.posts.index') }}">Posts</a>
        <a class="btn btn-primary" href="">Create Post</a>
    </div>
@endsection
