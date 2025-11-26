@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Gestion des opportunités de projets</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.project_opportunitie.create') }}" class="btn btn-primary mb-3">Ajouter une opportunité</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projectOpportunities as $opportunity)
                <tr>
                    <td>{{ $opportunity->title }}</td>
                    <td>{{ Str::limit($opportunity->description, 100) }}</td>
                    <td>
                        @if($opportunity->img_url)
                            <img src="{{ asset('storage/' . $opportunity->img_url) }}" alt="{{ $opportunity->title }}" width="60">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.project_opportunitie.edit', $opportunity) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.project_opportunitie.destroy', $opportunity) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette opportunité ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
