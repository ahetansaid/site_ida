@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Sections Obama</h1>
        <a href="{{ route('section-obama.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Ajouter une section
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des Sections Obama</h6>
        </div>
        <div class="card-body">
            @if($sections->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Ordre</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sections as $section)
                                <tr>
                                    <td>{{ $section->id }}</td>
                                    <td>
                                        @if($section->img_url)
                                            <img src="{{ asset('storage/' . $section->img_url) }}" 
                                                 alt="{{ $section->title }}" 
                                                 style="width: 80px; height: 60px; object-fit: cover;" class="img-thumbnail">
                                        @else
                                            <span class="text-muted">Aucune image</span>
                                        @endif
                                    </td>
                                    <td>{{ $section->title ?? 'Sans titre' }}</td>
                                    <td>{{ Str::limit($section->description, 100) }}</td>
                                    <td>{{ $section->order }}</td>
                                    <td>
                                        <span class="badge badge-{{ $section->is_active ? 'success' : 'danger' }}">
                                            {{ $section->is_active ? 'Actif' : 'Inactif' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('section-obama.show', $section) }}" 
                                               class="btn btn-sm btn-info" title="Voir">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('section-obama.edit', $section) }}" 
                                               class="btn btn-sm btn-warning" title="Modifier">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('section-obama.destroy', $section) }}" 
                                                  method="POST" 
                                                  style="display: inline-block;"
                                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette section ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Supprimer">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-4">
                    <p class="text-muted">Aucune section Obama trouvée.</p>
                    <a href="{{ route('section-obama.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Créer la première section
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
