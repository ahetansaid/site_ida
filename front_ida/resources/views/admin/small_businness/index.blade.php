@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Gestion des petites entreprises</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.small_businness.create') }}" class="btn btn-primary mb-3">Ajouter une petite entreprise</a>
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
            @foreach($smallBusinesses as $business)
                <tr>
                    <td>{{ $business->title }}</td>
                    <td>{{ Str::limit($business->description, 100) }}</td>
                    <td>
                        @if($business->img_url)
                            <img src="{{ asset('storage/' . $business->img_url) }}" alt="{{ $business->title }}" width="60">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.small_businness.edit', $business) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.small_businness.destroy', $business) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette petite entreprise ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
