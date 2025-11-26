@extends('admin.layouts.templates')

@section('content')
<div class="container">
    <h1>Gestion des projets AfWA</h1>
    <a href="{{ route('admin.afwa.create') }}" class="btn btn-primary mb-3">Ajouter un projet</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($afwas as $afwa)
                <tr>
                    <td>{{ $afwa->id }}</td>
                    <td>{{ $afwa->titre }}</td>
                    <td>{{ Str::limit($afwa->description, 50) }}</td>
                    <td>
                        @if($afwa->image)
                            <img src="{{ asset('storage/' . $afwa->image) }}" alt="{{ $afwa->titre }}" width="80">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.afwa.edit', $afwa) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('admin.afwa.destroy', $afwa) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Supprimer ce projet ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
