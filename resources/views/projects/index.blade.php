@extends("layouts.projects")

@section("content")
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
         <h1 class="mb-0">I miei progetti</h1>
         <a class="btn btn-outline-success" href="{{ route("projects.create") }}">Aggiungi progetto</a>
    </div>
         
    @foreach($projects as $project)
    <div class="card text-center my-5">
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