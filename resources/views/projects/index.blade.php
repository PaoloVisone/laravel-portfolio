@extends("layouts.projects")

@section("title", "Tutti i progetti")

@section("content")
<div class="container py-5">
    <h2 class="text-center m-4">I miei progetti</h2>
        
    @foreach($projects as $project)
    <div class="card text-center m-4">
        <div class="card-header">{{ $project->client }} - {{ $project->category }}</div>
  
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->content }}</p>
        </div>
 
        <div class="card-footer text-body-secondary">
            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Dettagli</a>
        </div>
    </div>
        @endforeach
    </div>
</div>
@endsection