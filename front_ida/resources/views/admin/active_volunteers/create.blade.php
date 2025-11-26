@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Ajouter un volontaire actif</h1>
    <form action="{{ route('admin.active_volunteers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="poste" class="form-label">Poste</label>
            <input type="text" name="poste" id="poste" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="linkedin" class="form-label">Lien LinkedIn (optionnel)</label>
            <input type="url" name="linkedin" id="linkedin" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('admin.active_volunteers.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
