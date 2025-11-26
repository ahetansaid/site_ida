@extends('admin.layouts.templates')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Détails de la section Obama</h1>
        <div>
            <a href="{{ route('section-obama.edit', $sectionObama) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Modifier
            </a>
            <a href="{{ route('section-obama.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Retour à la liste
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informations de la section</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Informations générales</h5>
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>ID :</strong></td>
                            <td>{{ $sectionObama->id }}</td>
                        </tr>
                        <tr>
                            <td><strong>Titre :</strong></td>
                            <td>{{ $sectionObama->title ?? 'Sans titre' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Ordre :</strong></td>
                            <td>{{ $sectionObama->order }}</td>
                        </tr>
                        <tr>
                            <td><strong>Statut :</strong></td>
                            <td>
                                <span class="badge badge-{{ $sectionObama->is_active ? 'success' : 'danger' }}">
                                    {{ $sectionObama->is_active ? 'Actif' : 'Inactif' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Créé le :</strong></td>
                            <td>{{ $sectionObama->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        <tr>
                            <td><strong>Modifié le :</strong></td>
                            <td>{{ $sectionObama->updated_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    </table>
                </div>
                
                <div class="col-md-6">
                    <h5>Image</h5>
                    @if($sectionObama->img_url)
                        <img src="{{ asset('storage/' . $sectionObama->img_url) }}" 
                             alt="{{ $sectionObama->title }}" 
                             class="img-fluid rounded"
                             style="max-height: 300px;">
                    @else
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> Aucune image associée à cette section.
                        </div>
                    @endif
                </div>
            </div>
            
            @if($sectionObama->description)
                <div class="mt-4">
                    <h5>Description</h5>
                    <div class="border rounded p-3 bg-light">
                        {!! nl2br(e($sectionObama->description)) !!}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
