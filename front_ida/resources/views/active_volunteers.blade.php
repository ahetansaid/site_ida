@extends('layouts.default')

@section('content')
<style>
.volunteer-card {
    background: transparent;
    padding: 20px 10px;
    border-radius: 16px;
    box-shadow: none;
}
.volunteer-photo-wrapper {
    background: transparent;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    margin: 0 auto 20px auto;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.volunteer-photo {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    border: 6px solid #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: filter 0.3s;
}
.volunteer-linkedin {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s;
    background: rgba(255,255,255,0.9);
    padding: 10px 18px;
    border-radius: 30px;
    font-size: 1.1rem;
    color: #0077b5;
    text-decoration: none;
    font-weight: bold;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.volunteer-photo-wrapper:hover .volunteer-linkedin {
    opacity: 1;
}
.volunteer-photo-wrapper:hover .volunteer-photo {
    filter: blur(2px) brightness(0.7);
}
.volunteer-name {
    font-weight: bold;
    font-size: 1.5rem;
    margin-top: 10px;
    margin-bottom: 5px;
}
.volunteer-poste {
    color: #888;
    font-size: 1.1rem;
    letter-spacing: 2px;
}
</style>
<!--Page Title-->
<section class="page-title style-two centred" >
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li><a href="partnership">Partenariat</a></li>
                <li>Volontaires actifs</li>
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

<div class="container my-5">
    <div class="row justify-content-center">
        @foreach($volunteers as $volunteer)
            <div class="col-md-4 d-flex justify-content-center mb-4">
                <div class="volunteer-card text-center">
                    <div class="volunteer-photo-wrapper">
                        <img src="{{ $volunteer->image ? asset('storage/' . $volunteer->image) : asset('assets/images/default.png') }}"
                             alt="{{ $volunteer->nom }}" class="volunteer-photo">
                        @if($volunteer->linkedin)
                            <a href="{{ $volunteer->linkedin }}" class="volunteer-linkedin" target="_blank">
                                <i class="fab fa-linkedin-in"></i> Voir le profil
                            </a>
                        @endif
                    </div>
                    <h3 class="volunteer-name">{{ $volunteer->nom }}</h3>
                    <div class="volunteer-poste">{{ $volunteer->poste }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
