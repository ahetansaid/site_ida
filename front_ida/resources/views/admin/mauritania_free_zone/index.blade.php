@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Gestion des zones franches Mauritanie</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.mauritania_free_zone.create') }}" class="btn btn-primary mb-3">Ajouter une zone franche</a>
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
            @foreach($mauritaniaFreeZones as $zone)
                <tr>
                    <td>{{ $zone->title }}</td>
                    <td>{{ Str::limit($zone->description, 100) }}</td>
                    <td>
                        @if($zone->img_url)
                            <img src="{{ asset('storage/' . $zone->img_url) }}" alt="{{ $zone->title }}" width="60">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.mauritania_free_zone.edit', $zone) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.mauritania_free_zone.destroy', $zone) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette zone franche ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
