@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Ajouter un bloc Infinity Circle</h1>
    <form action="{{ route('admin.infinity_circle.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="ordre" class="form-label">Ordre</label>
            <input type="number" name="ordre" id="ordre" class="form-control" value="0">
        </div>
        <div class="mb-3">
            <label for="type_bloc" class="form-label">Type de bloc</label>
            <select name="type_bloc" id="type_bloc" class="form-control">
                <option value="texte">Texte</option>
                <option value="membre">Membre</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sous_titre" class="form-label">Sous-titre (optionnel)</label>
            <input type="text" name="sous_titre" id="sous_titre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu (optionnel)</label>
            <textarea name="contenu" id="contenu" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('admin.infinity_circle.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
