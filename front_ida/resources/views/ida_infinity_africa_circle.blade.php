@extends('layouts.default')

@section('content')
<style>
.infinity-section {
    margin-bottom: 40px;
    padding: 24px 0;
    border-bottom: 1px solid #e5e5e5;
}
.infinity-title {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 10px;
}
.infinity-subtitle {
    font-size: 1.2rem;
    color: #0077b5;
    margin-bottom: 10px;
}
.infinity-content {
    font-size: 1.08rem;
    color: #222;
    margin-bottom: 10px;
}
.infinity-image {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
    margin-bottom: 16px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.infinity-membres {
    display: flex;
    flex-wrap: wrap;
    gap: 32px;
    justify-content: center;
    margin-top: 32px;
}
.infinity-membre-card {
    width: 220px;
    text-align: center;
}
.infinity-membre-photo {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.infinity-membre-nom {
    font-weight: bold;
    font-size: 1.1rem;
}
.infinity-membre-role {
    color: #888;
    font-size: 1rem;
}
</style>
<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li><a href="ida-activities">Activités IDA</a></li>
                <li>Cercle IDA Infinity Africa</li>
            </ul>
        </div>
    </div>
</section>

<div class="container my-5">
    @foreach($blocs as $bloc)
        @if($bloc->type_bloc === 'membre')
            @if($loop->first || !$blocs[$loop->index-1]->type_bloc === 'membre')
                <div class="infinity-section">
                    <div class="infinity-title">Membres du Cercle</div>
                    <div class="infinity-membres">
            @endif
                        <div class="infinity-membre-card">
                            @if($bloc->image)
                                <img src="{{ asset('storage/' . $bloc->image) }}" alt="{{ $bloc->titre }}" class="infinity-membre-photo">
                            @endif
                            <div class="infinity-membre-nom">{{ $bloc->titre }}</div>
                            @if($bloc->sous_titre)
                                <div class="infinity-membre-role">{{ $bloc->sous_titre }}</div>
                            @endif
                        </div>
            @if($loop->last || (isset($blocs[$loop->index+1]) && $blocs[$loop->index+1]->type_bloc !== 'membre'))
                    </div>
                </div>
            @endif
        @else
            <div class="infinity-section">
                @if($bloc->titre)
                    <div class="infinity-title">{{ $bloc->titre }}</div>
                @endif
                @if($bloc->sous_titre)
                    <div class="infinity-subtitle">{{ $bloc->sous_titre }}</div>
                @endif
                @if($bloc->image)
                    <img src="{{ asset('storage/' . $bloc->image) }}" alt="{{ $bloc->titre }}" class="infinity-image">
                @endif
                @if($bloc->contenu)
                    <div class="infinity-content">{!! nl2br(e($bloc->contenu)) !!}</div>
                @endif
            </div>
        @endif
    @endforeach
</div>
@endsection 
