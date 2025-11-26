@extends('layouts.default')

@section('content')
<style>
.benefit-row {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    margin-bottom: 40px;
    flex-wrap: nowrap;
    gap: 32px;
}
.benefit-image {
    width: 440px;
    height: 300px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.10);
    display: block;
    flex-shrink: 0;
}
.benefit-text {
    max-width: 500px;
}
@media (max-width: 700px) {
    .benefit-row {
        flex-direction: column;
        align-items: center;
        gap: 0;
    }
    .benefit-image {
        margin-right: 0;
        margin-bottom: 20px;
        width: 100%;
        max-width: 440px;
        height: 220px;
    }
    .benefit-text {
        text-align: center;
    }
}
</style>
<!--Page Title-->
<section class="page-title style-two centred" >
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li><a href="partnership.html">Partenariat</a></li>
                <li>Adhésion</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<style>
.page-title .content-box {
    padding: 40px 0;
    text-align: center;
}

.page-title .bread-crumb {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.page-title .bread-crumb li {
    color: #ffffff;
    font-size: 16px;
    font-weight: 500;
}

.page-title .bread-crumb li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.page-title .bread-crumb li a:hover {
    color: #f7941d;
}

.page-title .bread-crumb li:not(:last-child)::after {
    content: '/';
    margin-left: 10px;
    color: #ffffff;
    opacity: 0.7;
}
</style>
<!-- Section des avantages -->
<section class="skills-section">
    <div class="auto-container">
        <div class="row align-items-center clearfix justify-content-center">
            <div class="col-lg-10 col-md-12 col-sm-12 content-column">
                <div id="content_block_13">
                    <div class="content-box">
                        <div class="sec-title-two">
                            <h2>AVANTAGES DE L'ADHÉSION</h2>
                        </div>
                        <div class="text">
                            <ul class="list-unstyled">
                                @foreach($benefits as $benefit)
                                    <li class="benefit-row">
                                        @if($benefit->image)
                                            <img src="{{ asset('storage/' . $benefit->image) }}" alt="{{ $benefit->title }}" class="benefit-image">
                                        @endif
                                        <div class="benefit-text">
                                            <strong>{{ $benefit->title }}</strong>
                                            @if($benefit->description)
                                                <br><span>{!! nl2br(e($benefit->description)) !!}</span>
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
<!-- Fin de la section des avantages -->
@endsection
