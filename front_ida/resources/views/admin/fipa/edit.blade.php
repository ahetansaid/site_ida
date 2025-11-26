@extends('admin.layouts.templates')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('plugins/fileuploads/css/fileupload.css') }}">
@endsection

@section('title')
    Editer un projet
@endsection

@section('content')

    <div class="row row-sm mb-4">
        <div class="col-lg-12 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <h3 class="card-title mb-0">Modifier le projet</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('admin.fipa.update', $projet)}}" id="postForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @session('error')
                            <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
                                {{ $value }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                            </div>
                        @endsession

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">
                                            <span>Titre</span>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="title" name="titre"
                                            placeholder="Entrez le titre de la publication" value="{{ old('titre',$projet->titre) }}"
                                            required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="cover" class="form-label">
                                            <span>Image principale (Non obligatoire)</span>
                                        </label>
                                        <input type="file" class="form-control" id="cover" name="image" accept=".jpg, .png, image/jpeg, image/png"
                                            data-max-file-size="3M" class="cover" value="{!! old('image', $projet->image) !!}"
                                        >
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $projet->image) }}" alt="Image actuelle"
                                                class="img-fluid" style="max-width: 200px;">
                                        </div>
                                        @error('cover')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5">{{ old('description',  $projet->description) }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary ripple">Sauvegarder les modifications</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
