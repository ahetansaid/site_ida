@extends('admin.layouts.templates')

@section('content')
<div class="container">
    <h1>Ajouter un projet AfWA</h1>
    <form action="{{ route('admin.afwa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}" required>
            @error('titre')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            @error('description')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image principale</label>
            <input type="file" name="image" id="image" class="form-control">
            @error('image')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="domaines" class="form-label">Domaines d'intervention (séparés par une virgule)</label>
            <input type="text" name="domaines[]" id="domaines" class="form-control" placeholder="ex: Fishing, Mining, Construction">
            @error('domaines')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="carousel" class="form-label">Images du carrousel (plusieurs possibles)</label>
            <input type="file" name="carousel[]" id="carousel" class="form-control" multiple>
            @error('carousel')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('admin.afwa.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
