@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Modifier la zone franche Mauritanie</h1>
    <form action="{{ route('admin.mauritania_free_zone.update', $mauritaniaFreeZone) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre (optionnel)</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $mauritaniaFreeZone->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description (optionnel)</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $mauritaniaFreeZone->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img_url" class="form-label">Image (optionnel)</label>
            <input type="file" name="img_url" id="img_url" class="form-control">
            @if($mauritaniaFreeZone->img_url)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $mauritaniaFreeZone->img_url) }}" alt="{{ $mauritaniaFreeZone->title }}" width="80">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.mauritania_free_zone.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
