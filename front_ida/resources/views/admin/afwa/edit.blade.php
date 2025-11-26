@extends('admin.layouts.templates')

@section('content')
<div class="container">
    <h1>Modifier le projet AfWA</h1>
    <form action="{{ route('admin.afwa.update', $afwa) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre', $afwa->titre) }}" required>
            @error('titre')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $afwa->description) }}</textarea>
            @error('description')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image principale</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($afwa->image)
                <img src="{{ asset('storage/' . $afwa->image) }}" alt="{{ $afwa->titre }}" width="120" class="mt-2">
            @endif
            @error('image')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="domaines" class="form-label">Domaines d'intervention (séparés par une virgule)</label>
            <input type="text" name="domaines[]" id="domaines" class="form-control" value="{{ old('domaines', implode(',', $afwa->domaines ?? [])) }}">
            @error('domaines')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="carousel" class="form-label">Images du carrousel (plusieurs possibles)</label>
            <input type="file" name="carousel[]" id="carousel" class="form-control" multiple>
            @if($afwa->carousel)
                <div class="mt-2">
                    @foreach($afwa->carousel as $img)
                        <img src="{{ asset('storage/' . $img) }}" alt="carousel" width="80" class="me-2 mb-2">
                    @endforeach
                </div>
            @endif
            @error('carousel')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.afwa.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
