@extends("layouts.projects")

@section("content")

 <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-warning text-white text-center py-4">
                         <h2>MODIFICA IL PROGETTO</h2>
                    </div>
                    {{-- Form --}}
                    <div class="card-body p-4">
                        <form action="{{ route("projects.update", $project) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            {{-- Title --}}
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">
                                    Titolo Progetto
                                </label>
                                <input type="text" class="form-control form-control-lg" id="title" name="title" value="{{ $project->title }}" placeholder="Progetto" required>
                            </div>
{{-- Client --}}
                            <div class="mb-3">
                                <label for="client" class="form-label fw-bold">
                                    Nome Cliente
                                </label>
                                <input type="text" class="form-control form-control-lg" id="client" name="client" value="{{ $project->client }}" placeholder="Cliente" required>
                            </div>
{{-- Types --}}
                            <div class="mb-3">
                                <label for="type_id" class="form-label fw-bold">
                                    Categoria
                                </label>
                                <select class="form-select form-select-lg" id="type_id" name="type_id" required>
                                    <option value="">Seleziona categoria...</option>
                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
{{-- Technologies --}}
                            <div class="mb-3">
                    <label class="form-label fw-bold">Tecnologie</label>
                        <div class="card border-light">
                            <div class="card-body p-3">
                                @foreach ($technologies as $technology)
                                    <div class="form-check mb-2">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            id="technology_{{ $technology->id }}" 
                                            name="technologies[]" 
                                            value="{{ $technology->id }}"
                                            {{ $project->technologies->contains($technology->id) ? 'checked' : "" }}>
                                            <label class="form-check-label" for="technology_{{ $technology->id }}">
                                                {{ $technology->name }}
                                            </label>
                                         </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
{{-- image --}}
                     <div class="mb-4">
                        <label for="image">
                            Immagine Progetto
                        </label>
                        <input type="file" id="image" name="image">

                        @if($project->image)
                            <div class="mb-3 w-25">
                                <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="...">
                            </div>
                        @endif
                    </div>
{{-- Description --}}
                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold">
                                    Descrizione Progetto
                                </label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Descrivi il progetto in dettaglio..." required>{{ $project->content }}</textarea>
                            </div>
{{-- Submit --}}
                                <button type="submit" class="btn btn-warning btn-lg">
                                    Salva
                                </button>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>
@endsection