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
        color: #F38C1F;
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
        color: #F38C1F;
        position: absolute;
        left: 0;
        top: 2px;
    }
    .sidebar-side .gallery img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }
    .sidebar-side .gallery p {
        font-size: 0.9rem;
        color: #6c757d;
        text-align: center;
    }
</style>
@php
    $first = $strategicApproaches->first();
@endphp
<section class="page-title centred" style="background-image: url({{ $first && $first->image ? asset('storage/' . $first->image) : 'assets/images/projects/women-empowerment/strategic-approach/foodprocessing1-760x400.jpg' }});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Approche Stratégique</li>
            </ul>
        </div>
    </div>
</section>

<section class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-style-one">
                        @if ($first && $first->image)
                            <figure class="image-box">
                                <img src="{{ asset('storage/' . $first->image) }}" alt="{{ $first->titre }}">
                            </figure>
                        @endif
                        <div class="sec-title left">
                            <h5>La planification stratégique est un outil de base pour la définition et la réalisation des objectifs de l'organisation.</h5>
                            <h2>{{ $first->titre ?? '' }}</h2>
                        </div>
                        <div class="text">
                            <p>{!! nl2br(e($first->description)) !!}</p>
                            @if ($first->objectifs ?? false)
                                <p><strong>Objectifs :</strong> {!! nl2br(e($first->objectifs)) !!}</p>
                            @endif
                            @if ($first->resultats ?? false)
                                <p><strong>Résultats obtenus :</strong> {!! nl2br(e($first->resultats)) !!}</p>
                            @endif
                        </div>
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
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-details-content">
                    <div class="content-style-one">
                        <div class="sec-title left">
                            <h5>Galerie</h5>
                        </div>
                        <div class="gallery">
                            @if ($first && $first->carousel && is_array($first->carousel) && count($first->carousel) > 0)
                                @foreach ($first->carousel as $carouselImage)
                                    <img src="{{ asset('storage/' . $carouselImage) }}" alt="{{ $first->titre }}" class="img-fluid mb-2">
                                @endforeach
                            @else
                                <img src="assets/images/projects/women-empowerment/strategic-approach/foodprocessing1-760x400.jpg" alt="Default" class="img-fluid mb-2">
                            @endif
                        </div>
                        <div class="sec-title left">
                            <h5>Domaines</h5>
                        </div>
                        <ul class="list-item">
                            @if ($first->domaines && is_array($first->domaines))
                                @foreach ($first->domaines as $domaine)
                                    <li>{{ $domaine }}</li>
                                @endforeach
                            @else
                                <li>Aucun domaine renseigné.</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
