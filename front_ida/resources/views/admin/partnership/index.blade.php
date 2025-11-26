@extends('admin.layouts.templates')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Liste des partenaires</h2>
        <a href="{{ route('admin.partnership.create') }}" class="btn btn-primary">Ajouter un partenaire</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Pays</th>
                <th>Type</th>
                <th>Site web</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partners as $partner)
                <tr>
                    <td>
                        @if($partner->image)
                            <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" width="60">
                        @else
                            <span class="text-muted">Aucune image</span>
                        @endif
                    </td>
                    <td>{{ $partner->name }}</td>
                    <td>{{ $partner->country }}</td>
                    <td>{{ $partner->type }}</td>
                    <td>
                        @if($partner->website_url)
                            <a href="{{ $partner->website_url }}" target="_blank">Lien</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.partnership.edit', $partner->id) }}" class="btn btn-sm btn-warning">Éditer</a>
                        <form action="{{ route('admin.partnership.destroy', $partner->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce partenaire ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
