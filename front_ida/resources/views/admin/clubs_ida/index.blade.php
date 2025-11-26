@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Gestion des Clubs IDA</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.clubs_ida.create') }}" class="btn btn-primary mb-3">Ajouter un club</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Région</th>
                <th>Coordonateur</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
                <tr>
                    <td>{{ $club->nom }}</td>
                    <td>{{ $club->region }}</td>
                    <td>{{ $club->coordonateur }}</td>
                    <td>
                        @if($club->image)
                            <img src="{{ asset('storage/' . $club->image) }}" alt="{{ $club->nom }}" width="60">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.clubs_ida.edit', $club) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.clubs_ida.destroy', $club) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce club ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
