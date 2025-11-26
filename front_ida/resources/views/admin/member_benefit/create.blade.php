@extends('admin.layouts.templates')
@section('content')
<div class="container mt-4">
    <h2>Ajouter un avantage membre</h2>
    <form action="{{ route('admin.member_benefit.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="order" class="form-label">Ordre</label>
            <input type="number" name="order" id="order" class="form-control" value="{{ old('order') }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('admin.member_benefit.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
