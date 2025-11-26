@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <h1>Gestion des approches stratégiques</h1>
    <a href="{{ route('admin.strategic-approach.create') }}" class="btn btn-primary mb-3">Ajouter une approche</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des approches stratégiques</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        @foreach($strategicApproaches as $strategicApproach)
                        <tr>
                            <td>{{ $strategicApproach->id }}</td>
                            <td>{{ $strategicApproach->titre }}</td>
                            <td>{{ Str::limit($strategicApproach->description, 50) }}</td>
                            <td>
                                @if($strategicApproach->image)
                                    <img src="{{ asset('storage/' . $strategicApproach->image) }}" alt="{{ $strategicApproach->titre }}" width="80">
                                @else
                                    Aucune image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.strategic-approach.edit', $strategicApproach) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('admin.strategic-approach.destroy', $strategicApproach) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Supprimer cette approche ?');">
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
        </div>
    </div>
</div>
@endsection 
