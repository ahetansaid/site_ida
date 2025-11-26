@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Modifier le bloc</h1>
    <form action="{{ route('admin.infinity_circle.update', $infinityCircle) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="ordre" class="form-label">Ordre</label>
            <input type="number" name="ordre" id="ordre" class="form-control" value="{{ $infinityCircle->ordre }}">
        </div>
        <div class="mb-3">
            <label for="type_bloc" class="form-label">Type de bloc</label>
            <select name="type_bloc" id="type_bloc" class="form-control">
                <option value="texte" @if($infinityCircle->type_bloc == 'texte') selected @endif>Texte</option>
                <option value="membre" @if($infinityCircle->type_bloc == 'membre') selected @endif>Membre</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ $infinityCircle->titre }}" required>
        </div>
        <div class="mb-3">
            <label for="sous_titre" class="form-label">Sous-titre (optionnel)</label>
            <input type="text" name="sous_titre" id="sous_titre" class="form-control" value="{{ $infinityCircle->sous_titre }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($infinityCircle->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $infinityCircle->image) }}" alt="{{ $infinityCircle->titre }}" width="80">
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu (optionnel)</label>
            <textarea name="contenu" id="contenu" class="form-control" rows="4">{{ $infinityCircle->contenu }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.infinity_circle.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
