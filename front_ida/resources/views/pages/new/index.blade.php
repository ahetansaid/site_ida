@extends('admin.layouts.templates')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Liste des Articles</h3>
                <div class="card-tools">
                    <a href="/admin/news/create" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Nouvel Article
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Date de publication</th>
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $article)
                        <tr>
                            <td>
                                @if($article->image)
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" style="max-width: 100px;">
                                @else
                                    <span class="text-muted">Pas d'image</span>
                                @endif
                            </td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->author }}</td>
                            <td>{{ \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') }}</td>
                            <td>{{ $article->category }}</td>
                            <td>
                                <a href="/admin/news/{{ $article->id }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/admin/news/{{ $article->id }}/edit" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="/admin/news/{{ $article->id }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $news->links() }}
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
