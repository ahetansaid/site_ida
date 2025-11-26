@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <h1>Liste des événements</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Ajouter un événement</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Lieu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y H:i') }}</td>
                    <td>{{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format('d/m/Y H:i') : 'N/A' }}</td>
                    <td>{{ $event->location }}</td>
                    <td>
                        <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
