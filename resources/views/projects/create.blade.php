@extends("layouts.projects")

@section("content")

 <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white text-center py-4">
                         <h2>NUOVO PROGETTO</h2>
                    </div>
                    
                    <div class="card-body p-4">
                        <form action="{{ route(project.store) }}" method="POST">
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
                                <label for="category" class="form-label fw-bold">
                                    Categoria
                                </label>
                                <select class="form-select form-select-lg" id="category" name="category" required>
                                    <option value="">Seleziona categoria...</option>
                                    <option value="Web Development">Sviluppo Web</option>
                                    <option value="Mobile App">App Mobile</option>
                                    <option value="UI/UX Design">Design UI/UX</option>
                                    <option value="E-commerce">E-commerce</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Branding">Branding</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold">
                                    Descrizione Progetto
                                </label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Descrivi il progetto in dettaglio..." required></textarea>
                            </div>

                            
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Salva
                                </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>