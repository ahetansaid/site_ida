@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Détails Our Story</h1>
        <div>
            <a href="{{ route('admin.our-story.edit', $ourStory) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Modifier
            </a>
            <a href="{{ route('admin.our-story.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Retour à la liste
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $ourStory->title }}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $ourStory->image) }}" alt="{{ $ourStory->title }}" 
                             class="img-fluid rounded shadow" style="max-height: 300px;">
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-borderless">
                        <tr>
                            <th width="30%">Titre:</th>
                            <td>{{ $ourStory->title }}</td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{ $ourStory->description ?: 'Aucune description' }}</td>
                        </tr>
                        <tr>
                            <th>Ordre d'affichage:</th>
                            <td>{{ $ourStory->order }}</td>
                        </tr>
                        <tr>
                            <th>Statut:</th>
                            <td>
                                <span class="badge badge-{{ $ourStory->is_active ? 'success' : 'danger' }}">
                                    {{ $ourStory->is_active ? 'Actif' : 'Inactif' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Créé le:</th>
                            <td>{{ $ourStory->created_at->format('d/m/Y à H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Modifié le:</th>
                            <td>{{ $ourStory->updated_at->format('d/m/Y à H:i') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Actions</h6>
        </div>
        <div class="card-body">
            <div class="btn-group" role="group">
                <a href="{{ route('admin.our-story.edit', $ourStory) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Modifier
                </a>
                <form action="{{ route('admin.our-story.destroy', $ourStory) }}" method="POST" 
                      style="display: inline-block;" 
                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette Our Story ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
