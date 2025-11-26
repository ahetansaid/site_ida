@extends('layouts.default')

@section('content')
<style>
.about-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    padding: 24px;
    margin-bottom: 24px;
    transition: transform 0.2s, box-shadow 0.2s;
}
.about-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.12);
}
.about-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 16px;
}
.about-title {
    font-size: 1.3rem;
    font-weight: bold;
    margin-bottom: 12px;
    color: #333;
}
.about-description {
    color: #666;
    line-height: 1.6;
}
</style>

<!--Titre de la page-->
<section class="page-title centred" >
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>À propos</li>
            </ul>
        </div>
    </div>
</section>
<!--Fin du titre de la page-->

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

<style>
.about-hero {
    padding: 60px 0 30px;
}
.about-hero .eyebrow {
    display: inline-block;
    position: relative;
    padding-left: 36px;
    color: #888;
    font-weight: 600;
    margin-bottom: 18px;
}
.about-hero .eyebrow:before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    height: 2px;
    width: 24px;
    background: #f3c56a;
}
.about-hero-title {
    font-size: 48px;
    line-height: 1.15;
    font-weight: 800;
    color: #111;
    margin: 0 0 18px;
}
.about-hero p {
    color: #5b5b5b;
    font-size: 16px;
    line-height: 1.9;
    margin-bottom: 10px;
}
.about-hero-image {
    width: 100%;
    border-radius: 12px;
    overflow: hidden;
    background: #e9ecef;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 360px;
}
.about-hero-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
@media (max-width: 991.98px) {
    .about-hero-title { font-size: 36px; }
}
</style>

<section class="about-hero">
    <div class="auto-container">
        @php($hero = $abouts->first())
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-4 mb-lg-0">
                <div>
                    <div class="eyebrow">A propos de nous</div>
                    <h1 class="about-hero-title">
                        {{ $hero && $hero->title ? $hero->title : '' }}
                    </h1>
                    <div>
                        @if($hero && $hero->description)
                            <p>{!! nl2br(e($hero->description)) !!}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-hero-image">
                    @if($hero && $hero->img_url)
                        <img src="{{ asset('storage/' . $hero->img_url) }}" alt="{{ $hero->title }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if($abouts && $abouts->count() > 1)
<section class="about-hero" style="padding-top: 10px;">
    <div class="auto-container">
        @foreach($abouts->skip(1) as $about)
            <div class="row align-items-center clearfix" style="margin-bottom: 40px;">
                <div class="col-lg-6 col-md-12 col-sm-12 mb-4 mb-lg-0">
                    <div>
                        @if($about->title)
                            <h2 class="about-hero-title" style="font-size: 36px;">{{ $about->title }}</h2>
                        @endif
                        @if($about->description)
                            <p>{!! nl2br(e($about->description)) !!}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-hero-image">
                        @if($about->img_url)
                            <img src="{{ asset('storage/' . $about->img_url) }}" alt="{{ $about->title }}">
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif
<section class="team-section about-page-1">
    <div class="auto-container">
        <div class="title-box">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                    <div class="sec-title style-two right">
                        <h5>Équipe opérationnelle de l'IDA</h5>
                        
                    </div>
                </div>
               
            </div>
        </div>
        <div class="row clearfix">
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Andrea_Giannetto_(Italy).jpg" alt="Andrea Giannetto" title="Andrea Giannetto"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Andrea Giannetto (Italie)</a></h3>
                            <span class="designation">Fondateur et Président Exécutif de l'IDA</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Andrea Giannetto (Italie)</a></h3>
                            <span class="designation">Fondateur et Président Exécutif de l'IDA</span>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.linkedin.com/in/andrea1960/?originalSubdomain=it" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/hmidouch-team.jpg" alt="Hmidouch" title="Hmidouch"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Hmidouch (Maroc)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Hmidouch (Maroc)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Benoit_Ngom-team.jpg" alt="Benoit_Ngom" title="Benoit_Ngom"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Benoit Ngom (Sénégal)</a></h3>
                            <span class="designation">Président de l'ADA et Fondateur de l'IDA</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Benoit Ngom (Sénégal)</a></h3>
                            <span class="designation">Président de l'ADA et Fondateur de l'IDA</span>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.linkedin.com/in/benoit-ngom-a8332631a/?originalSubdomain=sn" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Astou_Danfakha_(Senegal).jpg" alt="Astou Danfakha" title="Astou Danfakha"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">Mme Astou Danfakha (Sénégal)</a></h3>
                            <span class="designation">Secrétariat</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">Mme Astou Danfakha (Sénégal)</a></h3>
                            <span class="designation">Secrétariat</span>
                            <ul class="social-links clearfix">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Khadijetou_cheikh_Saadbouh_(Mauritania).jpg" alt="Khadijetou Mint Cheikh Saadbouh" title="Khadijetou Mint Cheikh Saadbouh"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">Mme Khadijetou Mint Cheikh Saadbouh (Mauritanie)</a></h3>
                            <span class="designation">Conseillère Politique</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">Mme Khadijetou Mint Cheikh Saadbouh (Mauritanie)</a></h3>
                            <span class="designation">Conseillère Politique</span>
                            <ul class="social-links clearfix">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Gerard_Scerb_(Brazil).jpg" alt="Gerard Scerb" title="Gerard Scerb"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Gerard Scerb (Brésil)</a></h3>
                            <span class="designation">Conseiller Spécial du Président</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Gerard Scerb (Brésil)</a></h3>
                            <span class="designation">Conseiller Spécial du Président</span>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/gerard.scerb" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/gerard-scerb-232b4029/?originalSubdomain=br" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Silvano_Caselli_(Italy).jpg" alt="Silvano Caselli" title="Silvano Caselli"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Silvano Caselli (Italie)</a></h3>
                            <span class="designation">Conseiller Spécial du Président</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Silvano Caselli (Italie)</a></h3>
                            <span class="designation">Conseiller Spécial du Président</span>
                            <ul class="social-links clearfix">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Yah_Priod_(Swiss).jpg" alt="Yah Priod" title="Yah Priod"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">Mme Yah Priod (Suisse)</a></h3>
                            <span class="designation">Conseillère Spéciale du Président</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">Mme Yah Priod (Suisse)</a></h3>
                            <span class="designation">Conseillère Spéciale du Président</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Massimo_Varani_(Italy).jpg" alt="Massimo Varani" title="Massimo Varani"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Massimo Varani (Italie)</a></h3>
                            <span class="designation">Conseiller Spécial du Président</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Massimo Varani (Italie)</a></h3>
                            <span class="designation">Conseiller Spécial du Président</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Foreste_Tiemoko_(Ivory Coast).jpg" alt="Foreste Tiemoko" title="Foreste Tiemoko"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Foreste Tiemoko (Côte d'Ivoire)</a></h3>
                            <span class="designation">Représentant de la Côte d'Ivoire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Foreste Tiemoko (Côte d'Ivoire)</a></h3>
                            <span class="designation">Représentant de la Côte d'Ivoire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Federico_Maionchi_(UAE).jpg" alt="Federico Maionchi" title="Federico Maionchi"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Federico Maionchi (EAU)</a></h3>
                            <span class="designation">Conseiller Stratégique en Affaires</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Federico Maionchi (EAU)</a></h3>
                            <span class="designation">Conseiller Stratégique en Affaires</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Edward_Ssenyange_(Uganda).jpg" alt="Edward Ssenyange" title="Edward Ssenyange"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Edward Ssenyange (Ouganda)</a></h3>
                            <span class="designation">Conseiller Stratégique</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Edward Ssenyange (Ouganda)</a></h3>
                            <span class="designation">Conseiller Stratégique</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Thierry_Ezeghelian_(Swiss).jpg" alt="Thierry Ezeghelian" title="Thierry Ezeghelian"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Thierry Ezeghelian (Suisse)</a></h3>
                            <span class="designation">Chef du Comité Technique</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Thierry Ezeghelian (Suisse)</a></h3>
                            <span class="designation">Chef du Comité Technique</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Aminat_Thiao _Senegal).jpg" alt="Aminata Thiao" title="Aminata Thiao"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">Mme Aminata Thiao (Sénégal)</a></h3>
                            <span class="designation">Coordinatrice de l'équipe digitale</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">Mme Aminata Thiao (Sénégal)</a></h3>
                            <span class="designation">Coordinatrice de l'équipe digitale</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Karsène_Memevegni_(Benin).jpg" alt="Karsène Memevegni" title="Karsène Memevegni"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Karsène Memevegni (Bénin)</a></h3>
                            <span class="designation">Responsable de la vision stratégique de l'équipe digitale</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Karsène Memevegni (Bénin)</a></h3>
                            <span class="designation">Responsable de la vision stratégique de l'équipe digitale</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Lea_Volpe_(USA).jpg" alt="Lea Volpe" title="Lea Volpe"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">Mme Lea Volpe (USA)</a></h3>
                            <span class="designation">Marketing et Communication pour la Marque Dignity</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">Mme Lea Volpe (USA)</a></h3>
                            <span class="designation">Marketing et Communication pour la Marque Dignity</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Mame_Hamath_William_Diouf_(Canada).jpg" alt="Mame Hamath William Diouf" title="Mame Hamath William Diouf"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Mame Hamath William Diouf (Canada)</a></h3>
                            <span class="designation">Responsable International du Développement Agricole</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Mame Hamath William Diouf (Canada)</a></h3>
                            <span class="designation">Responsable International du Développement Agricole</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Angelo_Orsini_(Italy).jpg" alt="Angelo Orsini" title="Angelo Orsini"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Angelo Orsini (Italie)</a></h3>
                            <span class="designation">Expert Senior en Développement de Projets</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Angelo Orsini (Italie)</a></h3>
                            <span class="designation">Expert Senior en Développement de Projets</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Olajide_Ogodan_(Nigeria).jpg" alt="Olajide Ogodan" title="Olajide Ogodan"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Olajide Ogodan (Nigeria)</a></h3>
                            <span class="designation">Expert en Développement de Projets</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Olajide Ogodan (Nigeria)</a></h3>
                            <span class="designation">Expert en Développement de Projets</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Mbacké_Diop_(Senegal).jpg" alt="Mbacké Diop" title="Mbacké Diop"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Mbacké Diop (Sénégal)</a></h3>
                            <span class="designation">Expert en Développement de Projets</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Mbacké Diop (Sénégal)</a></h3>
                            <span class="designation">Expert en Développement de Projets</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Barthelemy_Lokoka_(Canada).jpg" alt="Barthelemy Lokoka" title="Barthelemy Lokoka"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Barthelemy Lokoka (Canada)</a></h3>
                            <span class="designation">Conseiller Technique</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Barthelemy Lokoka (Canada)</a></h3>
                            <span class="designation">Conseiller Technique</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Danaah_Abdulai_(Ghana).jpg" alt="Danaah Abdulai" title="Danaah Abdulai"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Danaah Abdulai (Ghana)</a></h3>
                            <span class="designation">Conseiller Technique</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Danaah Abdulai (Ghana)</a></h3>
                            <span class="designation">Conseiller Technique</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Moussa_Seck_(Senegal).jpg" alt="Moussa Seck" title="Moussa Seck"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Moussa Seck (Sénégal)</a></h3>
                            <span class="designation">Conseiller Technique</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Moussa Seck (Sénégal)</a></h3>
                            <span class="designation">Conseiller Technique</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Antoinette_Kone_(Ivory Coast).jpg" alt="Antoinette Kone" title="Antoinette Kone"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">Mme Antoinette Kone (Côte d'Ivoire)</a></h3>
                            <span class="designation">Projet Femmes</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">Mme Antoinette Kone (Côte d'Ivoire)</a></h3>
                            <span class="designation">Projet Femmes</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Aminata_Diagne_(Senegal).jpg" alt="Aminata Diagne" title="Aminata Diagne"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">Mme Aminata Diagne (Sénégal)</a></h3>
                            <span class="designation">Études de faisabilité</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">Mme Aminata Diagne (Sénégal)</a></h3>
                            <span class="designation">Études de faisabilité</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Eddy_Noumakan_Fofana_(Ivory Coast).jpg" alt="Eddy Noumakan Fofana" title="Eddy Noumakan Fofana"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Eddy Noumakan Fofana (Côte d'Ivoire)</a></h3>
                            <span class="designation">Conseiller de Projet</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Eddy Noumakan Fofana (Côte d'Ivoire)</a></h3>
                            <span class="designation">Conseiller de Projet</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
         
           
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Romano_Prodi-team.JPG" alt="Romano Prodi" title="Romano Prodi"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Romano Prodi (Italie)</a></h3>
                            <span class="designation">Président Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Romano Prodi (Italie)</a></h3>
                            <span class="designation">Président Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Michel_Camdessus-team.jpg" alt="Michel Camdessus" title="Michel Camdessus"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Michel Camdessus (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Michel Camdessus (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Colin_Powell-team.jpg" alt="Colin Powell" title="Colin Powell"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Colin Powell (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Colin Powell (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/boutros_ghali-team.jpg" alt="Boutros Boutros-Ghali" title="Boutros Boutros-Ghali"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Boutros Boutros-Ghali (Égypte)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Boutros Boutros-Ghali (Égypte)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Emeka_Anyaoku-team.jpg" alt="Emeka Anyaoku" title="Emeka Anyaoku"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Emeka Anyaoku (Nigeria)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Emeka Anyaoku (Nigeria)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Ernest_Bai_Koroma-team.jpg" alt="Ernest Bai Koroma" title="Ernest Bai Koroma"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Ernest Bai Koroma (Sierra Leone)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Ernest Bai Koroma (Sierra Leone)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Federico_Mayor_Zaragoza-team.jpg" alt="Federico Mayor Zaragoza" title="Federico Mayor Zaragoza"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Federico Mayor Zaragoza (Espagne)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Federico Mayor Zaragoza (Espagne)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/George_Moose-team.jpg" alt="George Moose" title="George Moose"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. George Moose (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. George Moose (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Hubert_Védrine-team.JPG" alt="Hubert Védrine" title="Hubert Védrine"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Hubert Védrine (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Hubert Védrine (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Lansana_Kouyate-team.jpg" alt="Lansana Kouyate" title="Lansana Kouyate"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Lansana Kouyate (Guinée)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Lansana Kouyate (Guinée)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Marcolino_Moco-team.jpg" alt="Marcolino Moco" title="Marcolino Moco"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Marcolino Moco (Angola)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Marcolino Moco (Angola)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Moustapha_Niasse-team.jpg" alt="Moustapha Niasse" title="Moustapha Niasse"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Moustapha Niasse (Sénégal)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Moustapha Niasse (Sénégal)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Olivier_Stirn-team.webp" alt="Olivier Stirn" title="Olivier Stirn"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Olivier Stirn (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Olivier Stirn (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/pascal_boniface-team.jpg" alt="Pascal Boniface" title="Pascal Boniface"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Pascal Boniface (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Pascal Boniface (France)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Salim-team.JPG" alt="Salim" title="Salim"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Salim (Mauritanie)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Salim (Mauritanie)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Biswajit_Ganguly-team.jpeg" alt="Biswajit Ganguly" title="Biswajit Ganguly"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Biswajit Ganguly (Inde)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Biswajit Ganguly (Inde)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Donaly_Malungu-team.jpeg" alt="Donaly Malungu" title="Donaly Malungu"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Donaly Malungu (RDC)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Donaly Malungu (RDC)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Jerry_Friedman-team.jpg" alt="Jerry Friedman" title="Jerry Friedman"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Jerry Friedman (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Jerry Friedman (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Martin_Perl-team.jpg" alt="Martin Perl" title="Martin Perl"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Martin Perl (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Martin Perl (USA)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Amara_Essy-team.jpg" alt="Amara Essy" title="Amara Essy"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Amara Essy (Côte d'Ivoire)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Amara Essy (Côte d'Ivoire)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/team/Ahmed_Esmat_Abd-El-Magid-team.jpg" alt="Ahmed Esmat Abd-El-Magid" title="Ahmed Esmat Abd-El-Magid"></figure>
                    <div class="lower-content">
                        <div class="content-box">
                            <h3><a href="#">M. Ahmed Esmat Abd-El-Magid (Égypte)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                        </div>
                        <div class="ovellay-box">
                            <h3><a href="#">M. Ahmed Esmat Abd-El-Magid (Égypte)</a></h3>
                            <span class="designation">Conseiller Honoraire</span>
                            <ul class="social-links clearfix">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection 
