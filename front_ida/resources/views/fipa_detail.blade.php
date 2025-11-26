@extends('layouts.default')

@section('content')
<!-- Page Title -->
<section class="page-title style-three centred bg-overlay" style="background-image: url({{ asset('assets/images/ida-activities/ADA_cover-1920x280.jpg') }});">
    <div class="auto-container">
        <div class="content-box text-center animate__animated animate__fadeIn">
            <h1 class="text-white fw-bold display-4" style="text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.9);">
                Détails du Projet FIPA
            </h1>
            <ul class="bread-crumb list-unstyled d-flex justify-content-center gap-3 mt-3">
                <li><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                <li><a href="/ida-activities" class="text-white text-decoration-none">Activités IDA</a></li>
                <li><a href="/fipa" class="text-white text-decoration-none">FIPA</a></li>
                <li class="text-white">Détails</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- FIPA Detail Section -->
<section class="sidebar-page-container py-5">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Contenu principal (à gauche) -->
            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="fipa-details-content animate__animated animate__fadeInUp">
                    <!-- Image principale -->
                    @if ($fipa_detail->image)
                        <figure class="image-box mb-4">
                            <img src="{{ asset('storage/' . $fipa_detail->image) }}" alt="{{ $fipa_detail->titre }}"
                                 class="img-fluid rounded shadow-sm" style="max-height: 500px; width: 100%; object-fit: cover; transition: transform 0.3s;"
                                 onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        </figure>
                    @endif

                    <!-- Contenu du projet -->
                    <div class="inner-box">
                        <ul class="post-info list-unstyled d-flex align-items-center gap-3 mb-4">
                            <li class="d-flex align-items-center text-muted">
                                <i class="far fa-calendar-alt me-2 text-primary"></i>
                                <span>{{ \Carbon\Carbon::parse($fipa_detail->created_at)->format('j M Y') }}</span>
                            </li>
                        </ul>
                        <div class="text">
                            <h2 class="fw-bold text-primary mb-4">{{ $fipa_detail->titre }}</h2>
                            <p class="text-muted lh-base">{!! $fipa_detail->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Projets Similaires (à droite) -->
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <div class="related-posts sticky-top" style="top: 20px;">
                    <h3 class="fw-bold text-primary mb-4">Autres Projets FIPA</h3>
                    <div class="d-flex flex-column gap-3">
                        @forelse ($related_fipa as $related)
                            <div class="card border-0 shadow-sm">
                                <!-- @if ($related->image)
                                    <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->titre }}"
                                         class="card-img-top rounded" style="height: 150px; object-fit: cover; transition: transform 0.3s;"
                                         onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                                @endif -->
                                <div class="card-body">
                                 
                                    <h6 class="card-title fw-bold text-primary">{{ Str::limit($related->titre, 40) }}</h6>
                                    <a href="{{ route('fipa.show', $related->id) }}" class="btn btn-outline-primary btn-sm">En savoir plus <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted">Aucun autre projet disponible.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    
    </div>
</section>
<!-- End FIPA Detail Section -->

<!-- Styles personnalisés -->
<style>
    .page-title {
        background-size: cover;
        background-position: center;
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
    .bg-gradient-primary {
        background: linear-gradient(90deg, #FCEABB, #FCEABB);
    }
    .btn-light {
        background-color: #fff;
        border-color: #fff;
    }
    .btn-light:hover {
        background-color: #e9ecef;
        color: #FCEABB;
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
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .sidebar-side {
        padding-left: 20px;
    }
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 20px;
        max-height: calc(100vh - 100px);
        overflow-y: auto;
    }
    @media (max-width: 768px) {
        .post-info {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 10px;
        }
        .image-box img {
            max-height: 300px;
        }
        .sidebar-side {
            margin-top: 20px;
            padding-left: 0;
        }
        .sticky-top {
            position: static;
            max-height: none;
            overflow-y: visible;
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
