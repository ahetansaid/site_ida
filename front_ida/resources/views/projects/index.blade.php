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
    .project-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    .filter-form {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 30px;
    }
    .filter-form .form-select {
        background-color: #fff;
        color: #000;
        border: 1px solid #ced4da;
        border-radius: 5px;
        height: 45px;
        padding: 8px 12px;
        font-size: 0.95rem;
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 12px;
        transition: border-color 0.3s ease;
    }
    .filter-form .form-select:focus {
        border-color: #007bff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
    .filter-form label {
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
    }
    .filter-form .btn {
        border-radius: 5px;
        padding: 10px 20px;
        transition: all 0.3s ease;
    }
    .filter-form .btn-primary {
        background-color: #2D8A4A;
        border: none;
    }
    .filter-form .btn-primary:hover {
        background-color: #2D8A4A;
    }
    .filter-form .btn-secondary {
        background-color: #6c757d;
        border: none;
    }
    .filter-form .btn-secondary:hover {
        background-color: #5a6268;
    }
    .project-card {
        background: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }
    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .project-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .project-card .content-box {
        padding: 20px;
    }
    .project-card h4 {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }
    .project-card h4 a {
        color: #343a40;
        text-decoration: none;
    }
    .project-card h4 a:hover {
        color: #2D8A4A;
    }
    .project-card .description {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 15px;
        line-height: 1.5;
    }
    .project-card .details {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        font-size: 0.85rem;
    }
    .project-card .details span {
        background-color: #e9ecef;
        border-radius: 12px;
        padding: 5px 10px;
        color: #495057;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .project-card .details i {
        color: #2D8A4A;
    }
    .pagination-wrapper {
        margin-top: 30px;
        text-align: center;
    }
    .pagination .page-link {
        border-radius: 5px;
        margin: 0 5px;
        color: #2D8A4A;
    }
    .pagination .page-item.active .page-link {
        background-color: #2D8A4A;
        border-color: #2D8A4A;
    }
    .about-style-two {
        padding: 60px 0;
        background-color: #fff;
    }
    .about-style-two h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .about-style-two p {
        font-size: 1rem;
        color: #6c757d;
        line-height: 1.6;
    }
</style>

<!--Page Title-->
<section class="page-title centred">
    <div class="auto-container">
        
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Projets</li>
            </ul>
        </div>
    </div>
</section>

<section class="project-section sec-pad">
    <div class="auto-container">
        <!-- Formulaire de filtrage -->
        <form method="GET" action="{{ route('projects.index') }}" class="filter-form mb-5">
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="year" class="form-label">Année</label>
                    <select name="year" id="year" class="form-select no-nice-select">
                        <option value="">Toutes</option>
                        @forelse ($years as $year)
                            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                        @empty
                            <option disabled>Aucune année disponible</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="domain" class="form-label">Domaine</label>
                    <select name="domain" id="domain" class="form-select no-nice-select">
                        <option value="">Tous</option>
                        @forelse ($domains as $domain)
                            <option value="{{ $domain }}" {{ request('domain') == $domain ? 'selected' : '' }}>{{ $domain }}</option>
                        @empty
                            <option disabled>Aucun domaine disponible</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="country" class="form-label">Pays</label>
                    <select name="country" id="country" class="form-select no-nice-select">
                        <option value="">Tous</option>
                        @forelse ($countries as $country)
                            <option value="{{ $country }}" {{ request('country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                        @empty
                            <option disabled>Aucun pays disponible</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="status" class="form-label">Statut</label>
                    <select name="status" id="status" class="form-select no-nice-select">
                        <option value="">Tous</option>
                        @forelse ($statuses as $status)
                            <option value="{{ $status }}" {{ request('status') == $status ? 'selected' : '' }}>{{ $status }}</option>
                        @empty
                            <option disabled>Aucun statut disponible</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">Filtrer</button>
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">Réinitialiser</a>
            </div>
        </form>

        <!-- Liste des projets -->
        <div class="row">
            @forelse ($projects as $project)
                <div class="col-md-4 mb-4">
                    <div class="project-card">
                        <figure class="image-box">
                            <img src="{{ asset('storage/' . ($project->media->first()->path ?? 'assets/images/projects/placeholder.jpg')) }}" alt="{{ $project->title }}" class="img-fluid">
                        </figure>
                        <div class="content-box">
                            <h4><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></h4>
                            <p class="description">{{ \Illuminate\Support\Str::limit(strip_tags($project->description), 100, '...') }}</p>
                            <div class="details">
                                <span><i class="fas fa-calendar-alt"></i> {{ $project->year ?? 'Non spécifié' }}</span>
                                <span><i class="fas fa-folder"></i> {{ $project->domain ?? 'Non spécifié' }}</span>
                                <span><i class="fas fa-globe"></i> {{ $project->country ?? 'Non spécifié' }}</span>
                                <span><i class="fas fa-info-circle"></i> {{ $project->status ?? 'Non spécifié' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">Aucun projet trouvé.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
            {{ $projects->appends(request()->query())->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>

<section class="about-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-12 content-column">
                <div class="content-box">
                    <div class="sec-title-two centred">
                        <h2>À propos de nos projets</h2>
                    </div>
                    <div class="text">
                        <p>L'IDA (Initiative pour le Développement de l'Afrique) est une ONG qui promeut, à travers des activités commerciales et culturelles, les principes d'un monde meilleur et contribue, par la coopération internationale, au développement du continent africain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
