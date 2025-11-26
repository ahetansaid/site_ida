@extends('admin.layouts.templates')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Liste des avantages membres</h2>
        <a href="{{ route('admin.member_benefit.create') }}" class="btn btn-primary">Ajouter un avantage</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Ordre</th>
                <th>Image</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($benefits as $benefit)
                <tr>
                    <td>{{ $benefit->order }}</td>
                    <td>
                        @if($benefit->image)
                            <img src="{{ asset('storage/' . $benefit->image) }}" alt="{{ $benefit->title }}" width="60">
                        @else
                            <span class="text-muted">Aucune image</span>
                        @endif
                    </td>
                    <td>{{ $benefit->title }}</td>
                    <td>{{ Str::limit($benefit->description, 80) }}</td>
                    <td>
                        <a href="{{ route('admin.member_benefit.edit', $benefit->id) }}" class="btn btn-sm btn-warning">Éditer</a>
                        <form action="{{ route('admin.member_benefit.destroy', $benefit->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cet avantage ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
