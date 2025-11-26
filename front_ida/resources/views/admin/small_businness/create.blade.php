@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Ajouter une petite entreprise</h1>
    <form action="{{ route('admin.small_businness.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre (optionnel)</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description (optionnel)</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="img_url" class="form-label">Image (optionnel)</label>
            <input type="file" name="img_url" id="img_url" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('admin.small_businness.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
