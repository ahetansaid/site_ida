@extends('admin.layouts.templates')
@section('content')
<div class="container mt-4">
    <h2>Ajouter un partenaire</h2>
    <form action="{{ route('admin.partnership.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Pays</label>
            <input type="text" name="country" id="country" class="form-control" value="{{ old('country') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}">
        </div>
        <div class="mb-3">
            <label for="website_url" class="form-label">Site web</label>
            <input type="url" name="website_url" id="website_url" class="form-control" value="{{ old('website_url') }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('admin.partnership.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
