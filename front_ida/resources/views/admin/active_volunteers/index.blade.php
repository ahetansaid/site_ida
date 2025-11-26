@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Gestion des volontaires actifs</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.active_volunteers.create') }}" class="btn btn-primary mb-3">Ajouter un volontaire</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Poste</th>
                <th>Image</th>
                <th>LinkedIn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($volunteers as $volunteer)
                <tr>
                    <td>{{ $volunteer->nom }}</td>
                    <td>{{ $volunteer->poste }}</td>
                    <td>
                        @if($volunteer->image)
                            <img src="{{ asset('storage/' . $volunteer->image) }}" alt="{{ $volunteer->nom }}" width="50">
                        @endif
                    </td>
                    <td>
                        @if($volunteer->linkedin)
                            <a href="{{ $volunteer->linkedin }}" target="_blank">Profil</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.active_volunteers.edit', $volunteer) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.active_volunteers.destroy', $volunteer) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce volontaire ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
