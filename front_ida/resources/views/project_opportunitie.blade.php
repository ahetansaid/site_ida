@extends('layouts.default')

@section('content')
<style>
.project-opportunitie-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    padding: 24px;
    margin-bottom: 24px;
    transition: transform 0.2s, box-shadow 0.2s;
}
.project-opportunitie-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.12);
}
.project-opportunitie-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 16px;
}
.project-opportunitie-title {
    font-size: 1.3rem;
    font-weight: bold;
    margin-bottom: 12px;
    color: #333;
}
.project-opportunitie-description {
    color: #666;
    line-height: 1.6;
}
</style>

<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Opportunités de projets</li>
            </ul>
        </div>
    </div>
</section>
<!--Fin du titre de la page-->

<section class="skills-section">
    <div class="auto-container">
        <div class="row align-items-center clearfix justify-content-center">
            <div class="col-lg-10 col-md-12 col-sm-12 content-column">
                <div id="content_block_13">
                    <div class="content-box">
                        <div class="sec-title-two">
                            <h2>OPPORTUNITÉS DE PROJETS</h2>
                        </div>
                        <div class="text">
                            <div class="row">
                                @foreach($projectOpportunities as $opportunity)
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <div class="project-opportunitie-card">
                                            @if($opportunity->img_url)
                                                <img src="{{ asset('storage/' . $opportunity->img_url) }}" alt="{{ $opportunity->title }}" class="project-opportunitie-image">
                                            @endif
                                            @if($opportunity->title)
                                                <div class="project-opportunitie-title">{{ $opportunity->title }}</div>
                                            @endif
                                            @if($opportunity->description)
                                                <div class="project-opportunitie-description">{!! nl2br(e($opportunity->description)) !!}</div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 
