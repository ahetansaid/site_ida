@extends('admin.layouts.templates')
@section('content')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Modifier l'image du slider</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('admin.update_slider', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Image actuelle</label>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $slider->img_url) }}" alt="Image actuelle" style="max-width: 200px; height: auto;" class="img-thumbnail">
                        </div>
                        <input type="file" name="img_url" class="form-control-file" id="imageInput" accept="image/*">
                        <small class="form-text text-muted">Laissez vide pour conserver l'image actuelle</small>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="5" required>{{ $slider->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        <a href="{{ route('admin.add_slider') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Gestion de la compression d'image
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();

        reader.onload = function(e) {
            const img = new Image();
            img.src = e.target.result;

            img.onload = function() {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);

                const compressedDataUrl = canvas.toDataURL('image/jpeg', 0.7);
                
                // Créer un nouveau fichier à partir de l'image compressée
                const compressedFile = dataURLtoFile(compressedDataUrl, file.name);
                
                // Mettre à jour l'input file avec le fichier compressé
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(compressedFile);
                document.getElementById('imageInput').files = dataTransfer.files;
            }
        }

        reader.readAsDataURL(file);
    });

    // Fonction utilitaire pour convertir DataURL en File
    function dataURLtoFile(dataurl, filename) {
        const arr = dataurl.split(',');
        const mime = arr[0].match(/:(.*?);/)[1];
        const bstr = atob(arr[1]);
        let n = bstr.length;
        const u8arr = new Uint8Array(n);
        while(n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new File([u8arr], filename, {type: mime});
    }
</script>

@endsection
