@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Modifier la petite entreprise</h1>
    <form action="{{ route('admin.small_businness.update', $smallBusinness) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre (optionnel)</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $smallBusinness->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description (optionnel)</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $smallBusinness->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img_url" class="form-label">Image (optionnel)</label>
            <input type="file" name="img_url" id="img_url" class="form-control">
            @if($smallBusinness->img_url)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $smallBusinness->img_url) }}" alt="{{ $smallBusinness->title }}" width="80">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.small_businness.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
