@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Modifier le volontaire</h1>
    <form action="{{ route('admin.active_volunteers.update', $activeVolunteer) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $activeVolunteer->nom }}" required>
        </div>
        <div class="mb-3">
            <label for="poste" class="form-label">Poste</label>
            <input type="text" name="poste" id="poste" class="form-control" value="{{ $activeVolunteer->poste }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($activeVolunteer->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $activeVolunteer->image) }}" alt="{{ $activeVolunteer->nom }}" width="80">
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="linkedin" class="form-label">Lien LinkedIn (optionnel)</label>
            <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ $activeVolunteer->linkedin }}">
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.active_volunteers.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
