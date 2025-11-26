@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Ajouter un club IDA</h1>
    <form action="{{ route('admin.clubs_ida.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="region" class="form-label">Région</label>
            <input type="text" name="region" id="region" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="coordonateur" class="form-label">Coordonateur (optionnel)</label>
            <input type="text" name="coordonateur" id="coordonateur" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description (optionnel)</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('admin.clubs_ida.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
