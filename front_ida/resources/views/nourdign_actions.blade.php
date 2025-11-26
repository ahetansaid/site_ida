@extends('layouts.default')

@section('content')
<style>
    .page-title {
        background-size: cover;
        background-position: center;
        padding: 80px 0;
        color: #fff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }
    .page-title h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .bread-crumb li {
        display: inline-block;
        color: #fff;
        font-size: 1rem;
    }
    .bread-crumb li a {
        color: #fff;
        text-decoration: none;
    }
    .bread-crumb li a:hover {
        text-decoration: underline;
    }
    .service-details {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .service-details-content {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    .content-style-one .image-box img {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .sec-title.left h5 {
        font-size: 1rem;
        font-weight: 600;
        color: #2D8A4A;
        margin-bottom: 10px;
    }
    .sec-title.left h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #343a40;
        margin-bottom: 15px;
    }
    .text p {
        font-size: 1rem;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    .list-item {
        list-style: none;
        padding: 0;
        margin-bottom: 20px;
    }
    .list-item li {
        font-size: 1rem;
        color: #6c757d;
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }
    .list-item li:before {
        content: '\f058';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        color: #2D8A4A;
        position: absolute;
        left: 0;
        top: 2px;
    }
</style>
@php
    $first = $nourDigns->first();
@endphp
<!--Page Title-->
<section class="page-title centred">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li><a href="projects">Projets</a></li>
                <li>NourDign Actions</li>
            </ul>
        </div>
    </div>
</section>

<section class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-12 content-side">
                <div class="service-details-content">
                    <div class="content-style-one">
                        @if ($first && $first->image)
                            <figure class="image-box">
                                <img src="{{ asset('storage/' . $first->image) }}" alt="{{ $first->titre }}">
                            </figure>
                        @endif
                        <div class="sec-title left">
                            <h5>{{ $first->auteur ?? 'IDA NourDign Program' }}</h5>
                            <h2>{{ $first->titre ?? '' }}</h2>
                        </div>
                        <div class="text">
                            <p>{!! nl2br(e($first->description)) !!}</p>
                        </div>
                        @if ($first->objectifs ?? false)
                            <div class="sec-title left"><h5>Objectifs</h5></div>
                            <div class="text"><p>{!! nl2br(e($first->objectifs)) !!}</p></div>
                        @endif
                        @if ($first->resultats ?? false)
                            <div class="sec-title left"><h5>Résultats obtenus</h5></div>
                            <div class="text"><p>{!! nl2br(e($first->resultats)) !!}</p></div>
                        @endif
                        @if ($first->domaines && is_array($first->domaines))
                            <ul class="list-item clearfix">
                                @foreach ($first->domaines as $domaine)
                                    <li>{{ $domaine }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NourDign Projects Section -->
@if($nourDigns && count($nourDigns) > 0)
<section class="project-section sec-pad">
    <div class="auto-container">
        <div class="sec-title-two centred">
            <h2>Our NourDign Projects</h2>
        </div>
        <div class="row clearfix">
            @foreach($nourDigns as $nourDign)
            <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        @if($nourDign->image)
                            <figure class="image"><img src="{{ asset('storage/' . $nourDign->image) }}" alt="{{ $nourDign->titre }}"></figure>
                        @else
                            <figure class="image"><img src="assets/images/projects/women-empowerment/nourdign-actions/Logo-NourDign.png-760x400.webp" alt="{{ $nourDign->titre }}"></figure>
                        @endif
                       
                    </div>
                    <div class="lower-content">
                        <h4><a href="#">{{ $nourDign->titre }}</a></h4>
                        <p>{{ Str::limit($nourDign->description, 80) }}</p>
                        @if($nourDign->domaines)
                        <div class="domaines">
                            @foreach(array_slice($nourDign->domaines, 0, 3) as $index => $domaine)
                                @php
                                    $badgeClasses = ['badge-primary', 'badge-success', 'badge-info', 'badge-warning', 'badge-secondary'];
                                    $badgeClass = $badgeClasses[$index % count($badgeClasses)];
                                @endphp
                                <span class="badge {{ $badgeClass }}">{{ $domaine }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
