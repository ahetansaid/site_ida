@extends('admin.layouts.templates')
@section('css')
@endsection
@section('additional-css')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('plugins/fileuploads/css/fileupload.css') }}">
@endsection
@section('title')
    Nouveau projet
@endsection

@section('content')

    <div class="row row-sm mb-4">
        <div class="col-lg-12 mx-auto">
            <div class="mb-4 card card-custom">
                <form method="POST" action="{{ route('admin.fipa.store') }}" id="postForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card custom-card">
                        <div class="card-body">
                            @session('error')
                                <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                                    {{ $value }}
                                    <button aria-label="Fermer" class="close" data-dismiss="alert" type="button">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endsession



                            <div class="card shadow-sm">
                                <div class="card-header bg-light">
                                    <h3 class="card-title mb-0">Nouveau projet</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">
                                                    <span>Titre</span>
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="title" name="titre"
                                                    placeholder="Entrez le titre de la publication"
                                                    value="{{ old('title') }}" required>
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="cover" class="form-label">
                                                    <span>Image principale</span>
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="form-control" id="cover" name="image"
                                                    accept=".jpg, .png, .jpeg, image/jpeg, image/png" data-max-file-size="3M"
                                                    required>
                                                @error('cover')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="content" class="form-label">
                                            <span>Contenu</span>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div id="editor">
                                            {!! old('content') !!}
                                        </div>
                                        <textarea name="description" id="content" class="form-control ms:d-none " rows="10"></textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        {{-- <small class="form-text text-muted">Utilisez l'éditeur ci-dessus pour formater votre
                                            contenu.</small> --}}
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary">Enregistrer le projet</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <style>
        .form-label span {
            font-weight: bold;
        }

        /* Style pour l'éditeur (si vous utilisez un éditeur WYSIWYG comme TinyMCE ou CKEditor) */
        /* #editor {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
        } */

        .invalid-feedback {
            display: block;
        }
    </style>
@endsection

@section('additional-scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script src="{{ asset('plugins/fileuploads/js/fileupload.js') }}"></script>

    <script>
        const editor = document.querySelector('#editor');

        $(function() {

            $(".cover").dropify({
                messages: {
                    'default': 'Glissez déposez ou cliquez',
                    'replace': 'Glissez déposez ou cliquez pour remplacer',
                    'remove': 'Supprimer',
                    'error': 'Ooops, Il y\'a eu une erreur',
                },
                errors: {
                    'fileSize': 'Le fichier est trop large.',
                    'imageFormat': 'Les formats autorizés sont (@{{ value }})'
                }
            });
        });

        const quill = new Quill('#editor', {
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                    ['blockquote', 'code-block'],
                    ['link', 'image'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }, {
                        'list': 'check'
                    }],
                    [{
                        'header': [1, 2, 3, 4, 5, 6]
                    }],

                    [{
                        'color': []
                    }], // dropdown with defaults from theme
                    [{
                        'font': []
                    }],
                    [{
                        'align': []
                    }],

                    ['clean'] // remove formatting button
                ]
            },
            theme: 'snow',
        });

        $('#postForm').submit(function(event) {
            event.preventDefault();
            $('#content').html(quill.getSemanticHTML())
            this.submit();
        });
    </script>
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
