@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <h1>Modifier le projet NourDign</h1>
    <form action="{{ route('admin.nourdign.update', $nourDign) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="titre">Titre *</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre', $nourDign->titre) }}" required>
            @error('titre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $nourDign->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image principale</label>
            @if($nourDign->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $nourDign->image) }}" alt="Image actuelle" width="200">
                </div>
            @endif
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="domaines">Domaines actuels</label>
            @if($nourDign->domaines)
                <div class="mb-2">
                    @foreach($nourDign->domaines as $domaine)
                        <span class="badge badge-primary">{{ $domaine }}</span>
                    @endforeach
                </div>
            @endif
            <input type="text" class="form-control @error('domaines') is-invalid @enderror" id="domaines" name="domaines[]" placeholder="Ex: Agriculture, Transformation, Commerce">
            @error('domaines')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="carousel">Images du carrousel</label>
            @if($nourDign->carousel)
                <div class="mb-2">
                    @foreach($nourDign->carousel as $img)
                        <img src="{{ asset('storage/' . $img) }}" alt="Image carrousel" width="100" class="mr-2">
                    @endforeach
                </div>
            @endif
            <input type="file" class="form-control-file @error('carousel') is-invalid @enderror" id="carousel" name="carousel[]" accept="image/*" multiple>
            @error('carousel')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('admin.nourdign.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
