@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <h1>Ajouter un projet NourDign</h1>
    <form action="{{ route('admin.nourdign.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="titre">Titre *</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}" required>
            @error('titre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image principale</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="domaines">Domaines (séparés par des virgules)</label>
            <input type="text" class="form-control @error('domaines') is-invalid @enderror" id="domaines" name="domaines[]" placeholder="Ex: Agriculture, Transformation, Commerce">
            @error('domaines')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="carousel">Images du carrousel</label>
            <input type="file" class="form-control-file @error('carousel') is-invalid @enderror" id="carousel" name="carousel[]" accept="image/*" multiple>
            @error('carousel')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Créer le projet</button>
        <a href="{{ route('admin.nourdign.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
