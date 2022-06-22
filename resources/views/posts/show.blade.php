@extends('layouts.app')

@section('content')
        <h1>Detalhes Posts {{ $post->title}}</h1>

<div class="container">
    {{$post->body}}
</div>

@include('posts.comments.comment')

@endsection

