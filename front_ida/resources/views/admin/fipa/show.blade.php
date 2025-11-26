@extends('admin.layouts.templates') 

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="color: darkblue;">
                    <span style="color: lightskyblue;">{{ $projet->titre }}</span>
                </h1>
            </div>
        </div>

        <div class="row" style="display: flex;">
            <div class="col-md-6" style="width: 50%; padding-left: 10px;">
                <p style="text-align: justify;">{{ $projet->description }}</p>
            </div>
            <div class="col-md-6" style="width: 50%; padding-right: 10px;">
                @if ($projet->image)
                    <img class="sticky-top" src="{{ asset('storage/' . $projet->image) }}" alt="{{ $projet->titre }}" style="width: 100%; height: auto; object-fit: cover;">
                @else
                    <p>Pas d'image disponible.</p>
                @endif
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <a href="{{ route('admin.fipa.index') }}" class="btn btn-primary">Retour à la liste des projets</a>
            </div>
        </div>
    </div>
@endsection
