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
    .committees-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .committees-section h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #343a40;
    }
    .committee-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        margin-bottom: 30px;
    }
    .committee-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .committee-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .committee-card .content-box {
        padding: 20px;
    }
    .committee-card h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #343a40;
    }
    .committee-card p {
        font-size: 1rem;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 10px;
    }
    .text-section {
        padding: 40px 0;
        background-color: #fff;
    }
    .text-section h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .text-section p {
        font-size: 1rem;
        color: #6c757d;
        line-height: 1.6;
    }
</style>

<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Comités Spéciaux</li>
            </ul>
        </div>
    </div>
</section>

<section class="committees-section">
    <div class="auto-container">
      
        <h2>Our Committees</h2>
        <div class="row">
            @forelse ($committees as $committee)
                <div class="col-md-4 mb-4">
                    <div class="committee-card">
                        @if ($committee->photo_path)
                            <img src="{{ asset('storage/' . $committee->photo_path) }}" alt="{{ $committee->name }}" class="img-fluid">
                        @else
                            <img src="assets/images/ida-activities/special-committees/girls-education.jpg.webp" alt="{{ $committee->name }}" class="img-fluid">
                        @endif
                        <div class="content-box">
                            <h3>{{ $committee->name }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($committee->description, 100) }}</p>
                            <p><strong>Objectifs :</strong> {{ \Illuminate\Support\Str::limit($committee->objectives, 100) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">Aucun comité trouvé.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
