@extends("layouts.projects")

@section("content")
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center py-4">
                    <h1 class="mb-0 fw-bold">{{ $project->title }}</h1>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-light rounded-circle p-2 me-3">
                            <i class="fas fa-building text-primary"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Cliente</small>
                            <h5 class="mb-0 fw-semibold">{{ $project->client }}</h5>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <span class="badge bg-primary fs-6 px-3 py-2">
                            {{ $project->type->name }}
                        </span>
                    </div>
                    
                    <div class="border-start border-primary border-4 ps-3">
                        <p class="lead mb-0">{{ $project->content }}</p>
                    </div>

                    <div class="d-flex py-4 gap-3">
                        <a class="btn btn-outline-warning" href="{{ route("projects.edit", $project) }}">Modifica</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Elimina
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ATTENZIONE!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il progetto definitivamente?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        {{-- DELETE BUTTON --}}
            <form action="{{ route("projects.destroy", $project) }}" method="POST">
                 @csrf
                 @method("DELETE")
                <input type="submit" class="btn btn-outline-danger" value="Elimina definitivamente">
            </form>
      </div>
    </div>
  </div>
</div>
@endsection

