@extends('admin.layouts.templates')

@section('content')
<style>
    .edit-project-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .edit-project-section h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: #343a40;
    }
    .form-label {
        font-weight: 600;
        color: #343a40;
    }
    .form-control, .form-select {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
    }
    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 30px;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .alert {
        border-radius: 5px;
    }
    .current-media img, .current-media video {
        max-width: 100px;
        border-radius: 5px;
        margin-top: 10px;
    }
    .current-documents a {
        display: block;
        margin-top: 10px;
        color: #007bff;
    }
</style>

<section class="edit-project-section">
    <div class="auto-container">
        <h2>Modifier le projet</h2>
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
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $project->title) }}" required>
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Année</label>
                <input type="text" name="year" id="year" class="form-control" value="{{ old('year', $project->year) }}">
                @error('year')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="domain" class="form-label">Domaine</label>
                <input type="text" name="domain" id="domain" class="form-control" value="{{ old('domain', $project->domain) }}">
                @error('domain')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Pays</label>
                <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $project->country) }}">
                @error('country')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Statut</label>
                <select name="status" id="status" class="form-select no-nice-select">
                    <option value="">Sélectionner</option>
                    <option value="En cours" {{ old('status', $project->status) == 'En cours' ? 'selected' : '' }}>En cours</option>
                    <option value="Terminé" {{ old('status', $project->status) == 'Terminé' ? 'selected' : '' }}>Terminé</option>
                    <option value="Planifié" {{ old('status', $project->status) == 'Planifié' ? 'selected' : '' }}>Planifié</option>
                </select>
                @error('status')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="media" class="form-label">Médias (images/vidéos)</label>
                <input type="file" name="media[]" id="media" class="form-control" multiple accept="image/*,video/mp4">
                @error('media.*')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                @if ($project->media->isNotEmpty())
                    <div class="current-media mt-3">
                        <p>Médias actuels :</p>
                        @foreach ($project->media as $media)
                            <div class="mb-2">
                                @if ($media->type === 'image')
                                    <img src="{{ asset('storage/' . $media->path) }}" alt="{{ $media->caption ?? 'Media' }}">
                                @else
                                    <video controls style="max-width: 100px;">
                                        <source src="{{ asset('storage/' . $media->path) }}" type="video/mp4">
                                    </video>
                                @endif
                                <div>
                                    <input type="checkbox" name="delete_media[]" value="{{ $media->id }}"> Supprimer
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="documents" class="form-label">Documents (PDF, DOC, DOCX)</label>
                <input type="file" name="documents[]" id="documents" class="form-control" multiple accept=".pdf,.doc,.docx">
                @error('documents.*')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                @if ($project->documents->isNotEmpty())
                    <div class="current-documents mt-3">
                        <p>Documents actuels :</p>
                        @foreach ($project->documents as $document)
                            <div class="mb-2">
                                <a href="{{ asset('storage/' . $document->path) }}" target="_blank">{{ $document->name }}</a>
                                <div>
                                    <input type="checkbox" name="delete_documents[]" value="{{ $document->id }}"> Supprimer
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </form>
    </div>
</section>
@endsection
