@extends('admin.layouts.templates')

@section('content')
<style>
    .edit-committee-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .edit-committee-section h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: #343a40;
    }
    .form-label {
        font-weight: 600;
        color: #343a40;
    }
    .form-control, .form-select {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
    }
    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 30px;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .alert {
        border-radius: 5px;
    }
    .current-photo img {
        max-width: 200px;
        border-radius: 5px;
    }
</style>

<section class="edit-committee-section">
    <div class="auto-container">
        <h2>Modifier le comité</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('admin.committees.update', $committee) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $committee->name) }}" required>
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5">{{ old('description', $committee->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="objectives" class="form-label">Objectifs</label>
                <textarea name="objectives" id="objectives" class="form-control" rows="5">{{ old('objectives', $committee->objectives) }}</textarea>
                @error('objectives')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                @error('photo')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                @if ($committee->photo_path)
                    <div class="current-photo mt-2">
                        <p>Photo actuelle :</p>
                        <img src="{{ asset('storage/' . $committee->photo_path) }}" alt="{{ $committee->name }}">
                    </div>
                @endif
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </form>
    </div>
</section>
@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
