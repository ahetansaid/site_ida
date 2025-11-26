@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Modifier l'opportunité de projet</h1>
    <form action="{{ route('admin.project_opportunitie.update', $projectOpportunitie) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre (optionnel)</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $projectOpportunitie->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description (optionnel)</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $projectOpportunitie->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img_url" class="form-label">Image (optionnel)</label>
            <input type="file" name="img_url" id="img_url" class="form-control">
            @if($projectOpportunitie->img_url)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $projectOpportunitie->img_url) }}" alt="{{ $projectOpportunitie->title }}" width="80">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.project_opportunitie.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
