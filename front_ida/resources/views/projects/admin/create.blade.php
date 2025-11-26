@extends('admin.layouts.templates')

@section('content')
<style>
    .create-project-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .create-project-section h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: #343a40;
    }
    .create-project-section .form-label {
        font-weight: 600;
        color: #343a40;
    }
    .create-project-section .form-control, .create-project-section .form-select {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
    }
    .create-project-section .form-control:focus, .create-project-section .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }
    .create-project-section .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 30px;
        border-radius: 5px;
        font-size: 1rem;
    }
    .create-project-section .btn-primary:hover {
        background-color: #0056b3;
    }
    .create-project-section .alert {
        border-radius: 5px;
    }
</style>

<section class="create-project-section">
    <div class="auto-container">
        <h2>Ajouter un projet</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Année</label>
                <input type="text" name="year" id="year" class="form-control" value="{{ old('year') }}">
                @error('year')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="domain" class="form-label">Domaine</label>
                <input type="text" name="domain" id="domain" class="form-control" value="{{ old('domain') }}">
                @error('domain')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Pays</label>
                <input type="text" name="country" id="country" class="form-control" value="{{ old('country') }}">
                @error('country')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Statut</label>
                <select name="status" id="status" class="form-select no-nice-select">
                    <option value="">Sélectionner</option>
                    <option value="En cours" {{ old('status') == 'En cours' ? 'selected' : '' }}>En cours</option>
                    <option value="Terminé" {{ old('status') == 'Terminé' ? 'selected' : '' }}>Terminé</option>
                    <option value="Planifié" {{ old('status') == 'Planifié' ? 'selected' : '' }}>Planifié</option>
                </select>
                @error('status')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="media" class="form-label">Médias (images ou vidéos)</label>
                <input type="file" name="media[]" id="media" class="form-control" multiple accept="image/*,video/mp4">
                @error('media')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                @error('media.*')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="documents" class="form-label">Documents</label>
                <input type="file" name="documents[]" id="documents" class="form-control" multiple accept=".pdf,.doc,.docx">
                @error('documents')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                @error('documents.*')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</section>
@endsection
