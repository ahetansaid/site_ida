@extends('admin.layouts.templates')
@section('content')
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Détails du slider</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Image</h5>
                        <img src="{{ asset('storage/' . $slider->img_url) }}" alt="Slider Image" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="col-md-6">
                        <h5>Description</h5>
                        <p class="text-muted">{{ $slider->description }}</p>
                        
                        <h5>Informations</h5>
                        <ul class="list-unstyled">
                            <li><strong>ID:</strong> {{ $slider->id }}</li>
                            <li><strong>Créé le:</strong> {{ $slider->created_at->format('d/m/Y H:i') }}</li>
                            <li><strong>Modifié le:</strong> {{ $slider->updated_at->format('d/m/Y H:i') }}</li>
                        </ul>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="{{ route('admin.edit_slider', $slider->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Modifier
                    </a>
                    <a href="{{ route('admin.add_slider') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Retour à la liste
                    </a>
                    <form action="{{ route('admin.delete_slider', $slider->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce slider ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
