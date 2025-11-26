@extends('admin.layouts.templates')
@section('content')
<div class="container mt-4">
    <h2>Éditer l'avantage membre</h2>
    <form action="{{ route('admin.member_benefit.update', $benefit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{ old('title', $benefit->title) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $benefit->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="order" class="form-label">Ordre</label>
            <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $benefit->order) }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if($benefit->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $benefit->image) }}" alt="{{ $benefit->title }}" width="80">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('admin.member_benefit.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection 
