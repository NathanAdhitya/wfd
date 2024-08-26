@extends('layouts.base')

@section('content')
    <div class="mt-3">
        <h1>Posts</h1>
        @foreach($posts as $post => $title)
            <a href="{{ route('posts.show', $post) }}">{{ $title }}</a>
        @endforeach
    </div>
@endsection
