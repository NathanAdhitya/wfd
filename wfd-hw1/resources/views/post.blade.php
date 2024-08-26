@extends('layouts.base')

@section('content')
    <div class="mt-3">
        <h1>Title: {!! $post['title'] !!}</h1>
        <p>Content: {!! $post['content'] !!}</p>
    </div>
@endsection
