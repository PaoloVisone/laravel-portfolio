@extends("layouts.posts")

@section("title", $post->title)

@section("content")

<h2>
    Autore: {{ $post->author }}
</h2>

<p>
    Category: {{$post->category }}
</p>

<span>
    Descrizione: {{ $post->content }}
</span>

@endsection