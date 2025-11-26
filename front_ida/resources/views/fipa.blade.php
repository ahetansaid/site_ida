@extends('layouts.default')

@section('content')
<!-- Page Title -->
<section class="page-title centred bg-overlay" style="background-image: url({{ asset('assets/images/ida-activities/ADA_cover-1920x280.jpg') }}); background-size: cover; background-position: center;">
    <div class="auto-container">
        <div class="content-box text-center animate__animated animate__fadeIn">
            
            <ul class="bread-crumb list-unstyled d-flex justify-content-center gap-3 mt-3">
                <li><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                <li><a href="/ida-activities" class="text-white text-decoration-none">Activités IDA</a></li>
                <li class="text-white">FIPA</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- FIPA Projects Section -->
<section class="about-style-three py-5" style="background-color: #fff8f1;">
    <div class="auto-container">
        <div class="row g-4">
            @forelse ($fipa as $projet)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 animate__animated animate__fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                    <div class="card h-100 border-0 shadow-sm">
                        @if ($projet->image)
                            <img src="{{ asset('storage/' . $projet->image) }}" alt="{{ $projet->titre }}"
                                 class="card-img-top img-fluid rounded" style="height: 200px; object-fit: cover; transition: transform 0.3s;"
                                 onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        @endif
                        <div class="card-body">
                            <p class="text-muted small mb-1">{{ \Carbon\Carbon::parse($projet->created_at)->format('j M Y') }}</p>
                            <h5 class="card-title fw-bold text-primary">{{ Str::limit($projet->titre, 30) }}</h5>
                            <p class="card-text text-muted">{{ Str::limit(strip_tags($projet->description), 100) }}</p>
                            <a href="{{ route('fipa.show', $projet->id) }}" class="btn btn-outline-primary mt-2">En savoir plus <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted py-5">Aucun projet FIPA disponible pour le moment.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
            {{ $fipa->appends(request()->query())->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>

<!-- Custom Styles -->
<style>
    .page-title {
        min-height: 280px;
        display: flex;
        align-items: center;
    }
    .bg-overlay {
        position: relative;
    }
    .bg-overlay::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }
    .content-box {
        position: relative;
        z-index: 1;
    }
    .bread-crumb li {
        font-size: 1.1rem;
    }
    .bread-crumb li a:hover {
        color: #ddd;
    }
    .text-primary {
        color: #FCEABB !important;
    }
    .btn-outline-primary {
        color: #e76f51;
        border-color: #e76f51;
    }
    .btn-outline-primary:hover {
        background-color: #f4a261;
        color: white;
        border-color: #f4a261;
    }
    .page-link {
        color: #e76f51;
        border: 1px solid #e76f51;
    }
    .page-link:hover {
        background-color: #f4a261;
        color: white;
    }
    .page-item.active .page-link {
        background-color: #e76f51;
        border-color: #e76f51;
        color: white;
    }
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .card-img-top {
            height: 150px;
        }
    }
</style>

<!-- Scripts pour animations et icônes -->
@if (!isset($animationsIncluded))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <?php $animationsIncluded = true; ?>
@endif
@endsection
