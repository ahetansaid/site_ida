@extends('admin.layouts.templates')
@section('content')
<div class="container mt-4">
    <h2>Éditer le partenaire</h2>
    <form action="{{ route('admin.partnership.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $partner->name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $partner->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Pays</label>
            <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $partner->country) }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $partner->type) }}">
        </div>
        <div class="mb-3">
            <label for="website_url" class="form-label">Site web</label>
            <input type="url" name="website_url" id="website_url" class="form-control" value="{{ old('website_url', $partner->website_url) }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if($partner->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" width="80">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.partnership.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
