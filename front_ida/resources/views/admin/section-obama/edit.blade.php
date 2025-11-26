@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modifier la section Obama</h1>
        <a href="{{ route('section-obama.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Retour à la liste
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informations de la section</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('section-obama.update', $sectionObama) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" 
                                   class="form-control @error('title') is-invalid @enderror" 
                                   id="title" 
                                   name="title" 
                                   value="{{ old('title', $sectionObama->title) }}"
                                   placeholder="Entrez le titre de la section">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="order" class="form-label">Ordre d'affichage</label>
                            <input type="number" 
                                   class="form-control @error('order') is-invalid @enderror" 
                                   id="order" 
                                   name="order" 
                                   value="{{ old('order', $sectionObama->order) }}"
                                   min="0">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" 
                              name="description" 
                              rows="6"
                              placeholder="Entrez la description de la section">{{ old('description', $sectionObama->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    
                    @if($sectionObama->img_url)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $sectionObama->img_url) }}" 
                                 alt="{{ $sectionObama->title }}" 
                                 style="max-width: 200px; max-height: 150px; object-fit: cover;"
                                 class="img-thumbnail">
                            <div class="form-text">Image actuelle</div>
                        </div>
                    @endif
                    
                    <input type="file" 
                           class="form-control @error('image') is-invalid @enderror" 
                           id="image" 
                           name="image"
                           accept="image/*">
                    <small class="form-text text-muted">Formats acceptés : JPEG, PNG, JPG, GIF. Taille max : 2MB. Laisser vide pour conserver l'image actuelle.</small>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" 
                               type="checkbox" 
                               id="is_active" 
                               name="is_active" 
                               value="1"
                               {{ old('is_active', $sectionObama->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            Section active
                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('section-obama.index') }}" class="btn btn-secondary">Annuler</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Mettre à jour la section
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
