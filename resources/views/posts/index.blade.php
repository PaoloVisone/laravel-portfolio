@extends("layouts.posts")

@section("title", "Tutti i posts")

@section("content")

{{-- Card --}}
@foreach ($posts as $post)
    
<div class="card">
    <h1>Titolo: {{$post->title}}</h1>
    <h2>Autore: {{$post->author}}</h2>
    <p>Catrgoria: {{$post->category}}</p>
    <span>Contenuto: {{$post->content}}</span>
</div>

@endforeach

@endsection