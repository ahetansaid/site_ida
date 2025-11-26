@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <h1>Détails de l'événement</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-text">{{ $event->description }}</p>
            <p><strong>Date de début :</strong> {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y H:i') }}</p>
            <p><strong>Date de fin :</strong> {{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format('d/m/Y H:i') : 'N/A' }}</p>
            <p><strong>Lieu :</strong> {{ $event->location }}</p>
            @if ($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="img-fluid" style="max-width: 300px;">
            @endif
            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning mt-3">Modifier</a>
            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary mt-3">Retour</a>
        </div>
    </div>
</div>
@endsection
