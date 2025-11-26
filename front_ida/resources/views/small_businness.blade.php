@extends('layouts.default')

@section('content')
<style>
.small-business-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    padding: 24px;
    margin-bottom: 24px;
    transition: transform 0.2s, box-shadow 0.2s;
}
.small-business-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.12);
}
.small-business-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 16px;
}
.small-business-title {
    font-size: 1.3rem;
    font-weight: bold;
    margin-bottom: 12px;
    color: #333;
}
.small-business-description {
    color: #666;
    line-height: 1.6;
}
</style>

<!--Page Title-->
<section class="page-title centred">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Petites entreprises</li>
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
                            <h2>PETITES ENTREPRISES</h2>
                        </div>
                        <div class="text">
                            <div class="row">
                                @foreach($smallBusinesses as $business)
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <div class="small-business-card">
                                            @if($business->img_url)
                                                <img src="{{ asset('storage/' . $business->img_url) }}" alt="{{ $business->title }}" class="small-business-image">
                                            @endif
                                            @if($business->title)
                                                <div class="small-business-title">{{ $business->title }}</div>
                                            @endif
                                            @if($business->description)
                                                <div class="small-business-description">{!! nl2br(e($business->description)) !!}</div>
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
