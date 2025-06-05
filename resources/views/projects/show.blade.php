@extends("layouts.projects")

@section("title", $project->title)

@section("content")

<h2>
    - {{ $project->author }}
</h2>

<span>{{$project->category}}</span>

<p>{{$project->content}}</p>

@endsection

