@extends('layouts.default')

@section('content')
<!-- Page Title -->
<section class="page-title style-three centred bg-overlay" style="background-image: url({{ asset('assets/images/background/mondo-slogan-Cultura-e-Culture.jpg') }});">
    <div class="auto-container">
        <div class="content-box text-center animate__animated animate__fadeIn">
            
            <ul class="bread-crumb list-unstyled d-flex justify-content-center gap-3 mt-3">
                <li><a href="/" class="text-white text-decoration-none">Accueil</a></li>
                <li class="text-white">Détails de l'Actualité</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<section class="sidebar-page-container py-5">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Contenu principal (à gauche) -->
            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content animate__animated animate__fadeInUp">
                    <!-- Image principale -->
                    <figure class="image-box mb-4">
                        <img src="{{ asset('storage/' . $new_details->image) }}" alt="{{ $new_details->title }}" class="img-fluid rounded shadow-sm" style="max-height: 500px; width: 100%; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </figure>

                    <!-- Contenu de l'article -->
                    <div class="inner-box">
                        <ul class="post-info list-unstyled d-flex align-items-center gap-3 mb-4">
                            <li class="d-flex align-items-center text-muted">
                                <i class="far fa-user me-2 text-primary"></i>
                                <span>Par {{ $new_details->author }}</span>
                            </li>
                            <li class="d-flex align-items-center text-muted">
                                <i class="far fa-calendar-alt me-2 text-primary"></i>
                                <span>{{ ucfirst(\Carbon\Carbon::parse($new_details->published_at)->locale('fr')->translatedFormat('j F Y')) }}</span>
                            </li>
                        </ul>
                        <div class="text">
                            <h2 class="fw-bold text-primary mb-4">{{ $new_details->title }}</h2>
                            <p class="text-muted lh-base">{!! $new_details->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Autres Actualités (à droite) -->
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <div class="related-posts sticky-top" style="top: 20px;">
                    <h3 class="fw-bold text-primary mb-4">Autres Actualités</h3>
                    <div class="list-group">
                        @forelse ($related_news as $related)
                          <a href="{{ route('pages.detail_news', $related->id) }}" class="list-group-item list-group-item-action border-0 shadow-sm mb-2">
                                <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="img-fluid rounded" style="height: 100px; object-fit: cover; width: 100%;">
                                <h6 class="mt-2 fw-bold">{{ Str::limit($related->title, 40) }}</h6>
                                <p class="text-muted small">{{ Str::limit(strip_tags($related->content), 60) }}</p>
                            </a>
                        @empty
                            <p class="text-muted">Aucune actualité similaire disponible.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Sidebar Page Container -->

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
    .bg-gradient-primary {
        background: linear-gradient(90deg, #2D8A4A, #2D8A4A);
    }
    .btn-light {
        background-color: #fff;
        border-color: #fff;
    }
    .btn-light:hover {
        background-color: #e9ecef;
        color: #2D8A4A;
    }
    .card, .list-group-item {
        transition: transform 0.3s;
    }
    .card:hover, .list-group-item:hover {
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
    }
</style>

<!-- Scripts pour animations (si non inclus dans layout) -->
@if (!isset($animationsIncluded))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
    <?php $animationsIncluded = true; ?>
@endif
@endsection
