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
    .sidebar-side .gallery img, .sidebar-side .gallery video {
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
    .documents-list {
        list-style: none;
        padding: 0;
    }
    .documents-list li {
        margin-bottom: 10px;
    }
    .documents-list li a {
        color: #2D8A4A;
        text-decoration: none;
        font-size: 1rem;
    }
    .documents-list li a:hover {
        text-decoration: underline;
    }
</style>

<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li><a href="/projects">Projets</a></li>
                <li>{{ $project->title }}</li>
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
                        @if ($project->media->where('type', 'image')->first())
                            <figure class="image-box">
                                <img src="{{ asset('storage/' . $project->media->where('type', 'image')->first()->path) }}" alt="{{ $project->title }}">
                            </figure>
                        @else
                            <figure class="image-box">
                                <img src="assets/images/projects/default.jpg" alt="{{ $project->title }}">
                            </figure>
                        @endif
                        <div class="sec-title left">
                            <h5>{{ $project->domain ?? 'Projet IDA' }}</h5>
                            <h2>{{ $project->title }}</h2>
                        </div>
                        <div class="text">
                            <p>{!! nl2br(e($project->description)) !!}</p>
                            @if ($project->objectives)
                                <p><strong>Objectifs :</strong> {!! nl2br(e($project->objectives)) !!}</p>
                            @endif
                            @if ($project->results)
                                <p><strong>Résultats obtenus :</strong> {!! nl2br(e($project->results)) !!}</p>
                            @endif
                            @if ($project->budget || $project->funding)
                                <p>
                                    @if ($project->budget)
                                        <strong>Budget :</strong> {{ $project->budget }}<br>
                                    @endif
                                    @if ($project->funding)
                                        <strong>Financement :</strong> {!! nl2br(e($project->funding)) !!}
                                    @endif
                                </p>
                            @endif
                        </div>
                        @if ($project->partners)
                            <ul class="list-item clearfix">
                                @foreach (explode("\n", trim($project->partners)) as $partner)
                                    @if ($partner)
                                        <li>{{ $partner }}</li>
                                    @endif
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
                            @forelse ($project->media as $media)
                                <div class="mb-3">
                                    @if ($media->type === 'image')
                                        <img src="{{ asset('storage/' . $media->path) }}" alt="{{ $media->caption ?? $project->title }}" class="img-fluid">
                                    @else
                                        <video controls class="img-fluid">
                                            <source src="{{ asset('storage/' . $media->path) }}" type="video/mp4">
                                            Votre navigateur ne supporte pas la vidéo.
                                        </video>
                                    @endif
                                    @if ($media->caption)
                                        <p>{{ $media->caption }}</p>
                                    @endif
                                </div>
                            @empty
                                <p>Aucun média disponible.</p>
                            @endforelse
                        </div>
                        <div class="sec-title left">
                            <h5>Documents</h5>
                        </div>
                        <ul class="documents-list">
                            @forelse ($project->documents as $document)
                                <li><a href="{{ asset('storage/' . $document->path) }}" download>{{ $document->name }}</a></li>
                            @empty
                                <li>Aucun document disponible.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
