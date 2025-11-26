@extends('admin.layouts.templates')


@section('content')
<style>
    .admin-committees-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .admin-committees-section h2 {
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
</style>

<section class="admin-committees-section">
    <div class="auto-container">
        <h2>Gérer les comités</h2>
        <a href="{{ route('admin.committees.create') }}" class="btn btn-primary mb-3">Ajouter un comité</a>
        
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
                    <th>Nom</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($committees as $committee)
                    <tr>
                        <td>{{ $committee->name }}</td>
                        <td>
                            @if ($committee->photo_path)
                                <img src="{{ asset('storage/' . $committee->photo_path) }}" alt="{{ $committee->name }}" style="width: 100px; height: auto; border-radius: 5px;">
                            @else
                                Aucune photo
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.committees.edit', $committee) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('admin.committees.destroy', $committee) }}" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce comité ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Aucun comité trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
