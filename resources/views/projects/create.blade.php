@extends("layouts.projects")

@section("content")

 <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-success text-white text-center py-4">
                         <h2>NUOVO PROGETTO</h2>
                    </div>
                    
                    <div class="card-body p-4">
                        <form action="{{ route("projects.store") }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">
                                    Titolo Progetto
                                </label>
                                <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Progetto" required>
                            </div>

                            <div class="mb-3">
                                <label for="client" class="form-label fw-bold">
                                    Nome Cliente
                                </label>
                                <input type="text" class="form-control form-control-lg" id="client" name="client" placeholder="Cliente" required>
                            </div>

                            <div class="mb-3">
                                <label for="type_id" class="form-label fw-bold">
                                    Categoria
                                </label>
                                <select class="form-select form-select-lg" id="type_id" name="type_id" required>
                                    <option value="">Seleziona categoria...</option>
                                 @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ $project->$type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                 @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold">
                                    Descrizione Progetto
                                </label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Descrivi il progetto in dettaglio..." required></textarea>
                            </div>

                            
                                <button type="submit" class="btn btn-success btn-lg">
                                    Salva
                                </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>