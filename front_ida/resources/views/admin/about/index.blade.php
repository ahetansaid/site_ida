@extends('admin.layouts.templates')

@section('content')
<div class="container mt-4">
    <h1>Gestion des informations générales</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.about.create') }}" class="btn btn-primary mb-3">Ajouter une information</a>
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
            @foreach($abouts as $about)
                <tr>
                    <td>{{ $about->title }}</td>
                    <td>{{ Str::limit($about->description, 100) }}</td>
                    <td>
                        @if($about->img_url)
                            <img src="{{ asset('storage/' . $about->img_url) }}" alt="{{ $about->title }}" width="60">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.about.destroy', $about) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette information ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
