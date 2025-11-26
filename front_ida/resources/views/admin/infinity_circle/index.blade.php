@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Gestion des blocs Infinity Circle</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.infinity_circle.create') }}" class="btn btn-primary mb-3">Ajouter un bloc</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ordre</th>
                <th>Titre</th>
                <th>Sous-titre</th>
                <th>Type</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blocs as $bloc)
                <tr>
                    <td>{{ $bloc->ordre }}</td>
                    <td>{{ $bloc->titre }}</td>
                    <td>{{ $bloc->sous_titre }}</td>
                    <td>{{ $bloc->type_bloc }}</td>
                    <td>
                        @if($bloc->image)
                            <img src="{{ asset('storage/' . $bloc->image) }}" alt="{{ $bloc->titre }}" width="60">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.infinity_circle.edit', $bloc) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.infinity_circle.destroy', $bloc) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce bloc ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
