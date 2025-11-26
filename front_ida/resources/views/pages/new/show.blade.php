@extends('admin.layouts.templates')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Détails de l'article</h3>
                <div class="card-tools">
                    <a href="/admin/news/index" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h2>{{ $news->title }}</h2>
                        <p class="text-muted">
                            Par {{ $news->author }} | 
                            Publié le {{ \Carbon\Carbon::parse($news->published_at)->format('d/m/Y') }} |
                            Catégorie: {{ $news->category }}
                        </p>
                        <div class="content mt-4">
                            {!! nl2br(e($news->content)) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        @if($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid rounded">
                        @else
                            <div class="alert alert-info">Aucune image disponible</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="btn-group">
                    <a href="/admin/news/{{ $news->id }}/edit" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Modifier
                    </a>
                    <form action="/admin/news/{{ $news->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
