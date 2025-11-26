@extends('layouts.default')

@section('content')
<style>
.club-row {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    margin-bottom: 48px;
    flex-wrap: nowrap;
    gap: 36px;
}
.club-image {
    width: 420px;
    height: 270px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.10);
    display: block;
    flex-shrink: 0;
}
.club-text {
    max-width: 600px;
}
.club-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 8px;
}
.club-region {
    color: #0077b5;
    font-weight: 500;
    margin-bottom: 8px;
}
.club-coordonateur {
    font-style: italic;
    color: #555;
    margin-bottom: 10px;
}
@media (max-width: 900px) {
    .club-row {
        flex-direction: column;
        align-items: center;
        gap: 0;
    }
    .club-image {
        margin-right: 0;
        margin-bottom: 20px;
        width: 100%;
        max-width: 420px;
        height: 180px;
    }
    .club-text {
        text-align: center;
    }
}
</style>
<!--Page Title-->
<section class="page-title centred">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Clubs IDA</li>
            </ul>
        </div>
    </div>
</section>
<!--Fin du titre de la page-->

<section class="skills-section">
    <div class="auto-container">
        <div class="row align-items-center clearfix justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div id="content_block_13">
                    <div class="content-box">
                        <div class="sec-title-two">
                            <h2>Liste des Clubs IDA</h2>
                        </div>
                        <div class="text">
                            <ul class="list-unstyled">
                                @foreach($clubs as $club)
                                    <li class="club-row">
                                        @if($club->image)
                                            <img src="{{ asset('storage/' . $club->image) }}" alt="{{ $club->nom }}" class="club-image">
                                        @endif
                                        <div class="club-text">
                                            <div class="club-title">{{ $club->nom }}</div>
                                            <div class="club-region">Région : {{ $club->region }}</div>
                                            @if($club->coordonateur)
                                                <div class="club-coordonateur">Coordonateur : {{ $club->coordonateur }}</div>
                                            @endif
                                            @if($club->description)
                                                <div class="club-description">{!! nl2br(e($club->description)) !!}</div>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
