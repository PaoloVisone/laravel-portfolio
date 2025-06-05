@extends("layouts.projects")

@section("content")
<div class="container m-4">
    <h1 class="text-center">I miei progetti</h1>
    <div class="py-5">
         <a class="btn btn-outline-success" href="{{ route("projects.create") }}">Aggiungi un progetto</a>
    </div>
        
    @foreach($projects as $project)
    <div class="card text-center">
        <div class="card-header">{{ $project->client }} - {{ $project->type->name }}</div>
  
        <div class="card-body">
            <h2 class="card-title">{{ $project->title }}</h2>
        </div>
 
        <div class="card-footer text-body-secondary">
            <a href="{{ route('projects.show', $project) }}" class="btn btn-primary">Dettagli</a>
        </div>
    </div>
        @endforeach
    </div>
</div>
@endsection