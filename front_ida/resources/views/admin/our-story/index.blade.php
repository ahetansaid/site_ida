@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion Our Story</h1>
        <a href="{{ route('admin.our-story.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Ajouter une Our Story
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
            <h6 class="m-0 font-weight-bold text-primary">Liste des Our Stories</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Ordre</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ourStories as $story)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $story->image) }}" alt="{{ $story->title }}" 
                                     style="width: 80px; height: 60px; object-fit: cover;" class="img-thumbnail">
                            </td>
                            <td>{{ $story->title }}</td>
                            <td>{{ Str::limit($story->description, 100) }}</td>
                            <td>{{ $story->order }}</td>
                            <td>
                                <span class="badge badge-{{ $story->is_active ? 'success' : 'danger' }}">
                                    {{ $story->is_active ? 'Actif' : 'Inactif' }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.our-story.show', $story) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.our-story.edit', $story) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.our-story.destroy', $story) }}" method="POST" 
                                          style="display: inline-block;" 
                                          onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette Our Story ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Aucune Our Story trouvée</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
