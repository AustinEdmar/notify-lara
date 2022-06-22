@extends('layouts.app')

@section('content')
        <h1>Listagem de Posts</h1>

        @forelse ($posts as $key=> $post)


           <span>
            <a href="{{ route('posts.show', $post->id)}}">

                {{$key++}} - {{ $post->title}} {{$post->comments->count()}}<br><hr>
            </a>

           </span>
        @empty
            <p>Nao ha Posts</p>
        @endforelse


@endsection

