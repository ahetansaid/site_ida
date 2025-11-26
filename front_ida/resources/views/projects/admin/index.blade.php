@extends('admin.layouts.templates')


@section('content')
<style>
    .admin-projects-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .admin-projects-section h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: #343a40;
    }
    .table {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .btn-primary, .btn-warning, .btn-danger {
        border-radius: 5px;
        padding: 8px 15px;
    }
    .alert {
        border-radius: 5px;
    }
    .pagination .page-link {
        border-radius: 5px;
        margin: 0 3px;
    }
</style>

<section class="admin-projects-section">
    <div class="auto-container">
        <h2>Gérer les projets</h2>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Ajouter un projet</a>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Domaine</th>
                    <th>Pays</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->year ?? 'N/A' }}</td>
                        <td>{{ $project->domain ?? 'N/A' }}</td>
                        <td>{{ $project->country ?? 'N/A' }}</td>
                        <td>{{ $project->status ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Aucun projet trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="pagination">
            {{ $projects->links() }}
        </div>
    </div>
</section>
@endsection
