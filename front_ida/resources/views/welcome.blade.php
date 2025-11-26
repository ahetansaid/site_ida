@extends('layouts.default')
@section('content')



    <!-- banner-section -->
    <section class="banner-section style-five">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            @if (isset($slider_image) && $slider_image->count() > 0)
                @foreach ($slider_image as $slider)
                    <div class="slide-item">
                        <div class="image-layer" style="background-image: url('{{ asset('storage/' . $slider->img_url) }}')">
                        </div>
                        <div class="auto-container">
                            <div class="content-box">
                                <h5>{{ $slider->description }}</h5>
                                <!-- <h1>{{ $slider->description }}</h1> -->

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="slide-item">
                    <div class="image-layer"
                        style="background-image: url('{{ asset('assets/images/background/page-title.jpg') }}')"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h5>Bienvenue sur le site de l'IDA</h5>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Section Obama -->
    @if (isset($sectionObamas) && $sectionObamas->isNotEmpty())
        @foreach ($sectionObamas as $index => $section)
            <section class="about-hero"
                style="padding: 60px 0 {{ $index < $sectionObamas->count() - 1 ? '40px' : '60px' }} 0;">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-4 mb-lg-0">
                            <div>
                                <div class="eyebrow">A propos de nous</div>
                                @if ($section->title)
                                    <h1 class="about-hero-title">{{ $section->title }}</h1>
                                @endif
                                @if ($section->description)
                                    <p>{!! nl2br(e($section->description)) !!}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-hero-image">
                                @if ($section->img_url)
                                    <img src="{{ asset('storage/' . $section->img_url) }}" alt="{{ $section->title }}">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    @endif

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
            .about-hero-title {
                font-size: 36px;
            }
        }
    </style>

    <section class="news-style-three alterner-2">
        <div class="auto-container">
            <div class="title-inner clearfix">
                <div class="sec-title style-four right pull-left">
                    <h5>Nos recentes actualités</h5>
                    <h2>Les nouvelles</h2>
                </div>
                <div class="btn-box pull-right"><a href="/news">Voir plus</a></div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-12 col-md-6 col-sm-12 big-column">
                    <div class="right-block">
                        <div class="row clearfix">
                            @foreach ($all_news as $news)
                                <div class="col-lg-3 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <figure class="image-box"><a href="/detail_news/{{ $news->id }}"><img
                                                        style="height: 280px;" src="{{ '/public/storage/' . $news->image }}"
                                                        alt=""></a></figure>
                                            <div class="lower-content">
                                                <ul class="post-info">

                                                    <li>{{ ucfirst(\Carbon\Carbon::parse($news->published_at)->locale('fr')->translatedFormat('F j, Y')) }}
                                                    </li>
                                                </ul>
                                                <h3><a href="/detail_news/{{ $news->id }}">{{ $news->title }}</a>
                                                </h3>
                                                <p>{{ Str::limit($news->content, 50, '...') }}</p>
                                                <div class="link"><a href="/detail_news/{{ $news->id }}"><i
                                                            class="fas fa-arrow-right"></i><span>En savoir plus</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- b2b-section -->
    <section class="project-style-two">
        <div class="auto-container">
            <div class="sec-title style-three centred">
                <h5>Événements à venir</h5>
                <h2>Participez à nos événements</h2>
            </div>
            <div class="project-carousel-2 owl-carousel owl-theme owl-nav-none">
                @if (isset($events) && $events->isNotEmpty())
                    @foreach ($events as $event)
                        <div class="project-inner">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('assets/images/b2b/1.png') }}"
                                        alt="{{ $event->title }}"
                                        style="max-width: 600px; max-height: 400px; width: 100%; height: auto;">
                                </figure>
                                <div class="content-box">
                                    <span>{{ $event->location }}</span>
                                    <h3>{{ $event->title }}</h3>
                                    <p>
                                        {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y H:i') }}
                                        -
                                        {{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format('d/m/Y H:i') : 'TBD' }}<br>
                                        {{ Str::limit($event->description, 100) }}
                                    </p>
                                    <a href="{{ route('events.show', $event->id) }}">
                                        <i class="fas fa-arrow-right"></i><span>Voir les détails</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="project-inner">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('assets/images/b2b/1.png') }}" alt="Aucun événement">
                            </figure>
                            <div class="content-box">
                                <span>Information</span>
                                <h3>Aucun événement à venir</h3>
                                <p>Revenez bientôt pour découvrir nos prochains événements !</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- b2b-section end -->



    <!-- Section Nos Projets supprimée -->

    <!-- Our Story Section -->
    <section class="project-style-four">
        <div class="auto-container">
            <div class="title-inner clearfix">
                <div class="sec-title style-four right pull-left">
                    <h5>À propos</h5>
                    <h2>Our Story</h2>
                </div>
            </div>
            @if (isset($ourStories) && $ourStories->isNotEmpty())
                @php
                    $storyChunks = $ourStories->chunk(3);
                @endphp
                <div class="owl-carousel owl-theme our-story-carousel">
                    @foreach ($storyChunks as $storyGroup)
                        <div class="our-story-slide">
                            <div class="our-story-slide-inner">
                                @foreach ($storyGroup as $story)
                                    <div class="our-story-card">
                                        <div class="story-image-wrapper">
                                            <img src="{{ $story->image ? asset('storage/' . $story->image) : asset('assets/images/placeholder.png') }}"
                                                alt="{{ $story->title }}">
                                        </div>
                                        <div class="story-content">
                                            <h3>{{ $story->title }}</h3>
                                            <p>{{ Str::limit($story->description, 80) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                @for ($i = $storyGroup->count(); $i < 3; $i++)
                                    <div class="our-story-card placeholder-card">
                                        <div class="story-image-wrapper">
                                            <img src="{{ asset('assets/images/placeholder.png') }}" alt="Placeholder">
                                        </div>
                                        <div class="story-content">
                                            <h3>À venir</h3>
                                            <p>De nouvelles histoires seront ajoutées prochainement.</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="our-story-placeholder">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="our-story-card placeholder-card">
                            <div class="story-image-wrapper">
                                <img src="{{ asset('assets/images/placeholder.png') }}" alt="Placeholder">
                            </div>
                            <div class="story-content">
                                <h3>À venir</h3>
                                <p>De nouvelles histoires seront ajoutées prochainement.</p>
                            </div>
                        </div>
                    @endfor
                </div>
            @endif
        </div>
    </section>
    <!-- End Our Story Section -->

    <style>
        .image-box img {
            max-width: 600px;
            max-height: 400px;
            width: 100%;
            height: auto;
            object-fit: cover;
            /* Assure que l'image remplit l'espace sans déformation */
        }



        /* Styles pour le carousel Our Story - Basé sur banner-section */
        .story-carousel {
            position: relative;
        }

        .story-carousel .slide-item {
            position: relative;
            padding: 200px 0px 150px 0px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .story-carousel .slide-item:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .story-carousel .auto-container {
            position: relative;
            z-index: 2;
        }

        .story-carousel .content-box {
            text-align: center;
            color: white;
        }

        .story-carousel .content-box h4 {
            font-size: 36px;
            line-height: 46px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .story-carousel .content-box p {
            font-size: 18px;
            line-height: 28px;
            margin-bottom: 0;
        }

        /* Navigation du carousel */
        .story-carousel .owl-theme .owl-nav {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
        }

        .story-carousel .owl-theme .owl-nav .owl-prev {
            position: absolute;
            left: 50px;
            top: 0;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            transition: all 300ms ease;
        }

        .story-carousel .owl-theme .owl-nav .owl-next {
            position: absolute;
            right: 50px;
            top: 0;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            transition: all 300ms ease;
        }

        .story-carousel .owl-theme .owl-nav .owl-prev:hover,
        .story-carousel .owl-theme .owl-nav .owl-next:hover {
            background: #ff6b35;
        }

        .story-item {
            margin: 0 15px;
            position: relative;
        }

        .story-item .inner-box {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .story-item .inner-box:hover {
            transform: translateY(-5px);
        }

        .story-item .image-box {
            position: relative;
            overflow: hidden;
        }

        .story-item .overlay-box {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .story-item .inner-box:hover .overlay-box {
            transform: translateY(0);
        }

        .story-item .overlay-box h4 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: 600;
        }

        .story-item .overlay-box p {
            margin: 0;
            font-size: 14px;
            line-height: 1.4;
        }
        }

        .story-item .overlay-box {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 30px 20px 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .story-item .inner-box:hover .overlay-box {
            transform: translateY(0);
        }

        .story-item .overlay-box h4 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .story-item .overlay-box p {
            font-size: 0.9rem;
            line-height: 1.4;
            margin: 0;
        }

        .ida-description {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .ida-description h3 {
            color: #2c3e50;
            font-weight: 700;
        }

        .ida-description .lead {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .ida-description p {
            color: #666;
            line-height: 1.6;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .story-item {
                margin: 0 10px;
            }

            .ida-description {
                padding: 30px 20px;
            }

            .ida-description .lead {
                font-size: 1rem;
            }
        }

        /* Amélioration de la luminosité des slides */
        .banner-section .image-layer {
            filter: brightness(1.3) contrast(1.1);
            transition: filter 0.3s ease;
        }

        .banner-section .image-layer:hover {
            filter: brightness(1.4) contrast(1.2);
        }

        /* Amélioration de la lisibilité du texte sur les slides */
        .banner-section .content-box h5 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            color: #ffffff;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.3);
            padding: 10px 20px;
            border-radius: 5px;
            backdrop-filter: blur(5px);
        }

        /* Overlay pour améliorer la visibilité du contenu */
        .banner-section .slide-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));
            z-index: 1;
        }

        .banner-section .content-box {
            position: relative;
            z-index: 2;
        }

        .our-story-carousel {
            position: relative;
        }

        .our-story-card,
        .our-story-placeholder .our-story-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            flex: 1 1 calc(33.333% - 20px);
            max-width: 350px;
        }

        .our-story-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.12);
        }

        .story-image-wrapper {
            width: 100%;
            aspect-ratio: 4 / 3;
            background: #f1f3f5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .story-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story-content {
            padding: 24px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .story-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .story-content p {
            font-size: 0.95rem;
            color: #5a6c7d;
            margin: 0;
        }

        .our-story-carousel .owl-stage-outer {
            padding: 10px 0;
        }

        .our-story-slide {
            padding: 15px;
        }

        .our-story-slide-inner {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .our-story-carousel .owl-nav {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .our-story-carousel .owl-nav button {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #f1f3f5 !important;
            color: #2c3e50 !important;
            border: 1px solid #d1d9e6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem !important;
            transition: all 0.3s ease;
        }

        .our-story-carousel .owl-nav button:hover {
            background: #2c3e50 !important;
            color: #ffffff !important;
            border-color: #2c3e50;
        }

        .our-story-carousel .owl-nav button span {
            font-size: 1.5rem;
            line-height: 1;
        }

        .our-story-carousel .owl-nav button.disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }

        .our-story-carousel .owl-dots {
            justify-content: center;
            margin-top: 15px;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .section-obama {
                padding: 40px 0;
            }

            .obama-section-item {
                padding: 25px;
                margin-bottom: 30px;
            }

            .section-obama .section-title {
                font-size: 2rem;
                margin-bottom: 20px;
            }

            .section-obama .description {
                font-size: 1rem;
            }

            .section-obama .image-box {
                margin-top: 30px;
                padding: 10px;
            }

            .our-story-slide-inner {
                flex-direction: column;
                align-items: center;
            }

            .our-story-card {
                max-width: 100%;
            }

            .our-story-placeholder {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
    <!-- project-style-four end -->







    <script>
        $(document).ready(function() {
            $('.project-carousel-2').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>

    <!-- news-style-three end -->



    <!-- clients-section end -->

    <script>
        $(document).ready(function() {
            // Configuration pour afficher 3 éléments en boucle
            if ($('.our-story-section .project-carousel-2').length) {
                $('.our-story-section .project-carousel-2').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    navText: ['<span class="fa fa-angle-left"></span>',
                        '<span class="fa fa-angle-right"></span>'
                    ],
                    responsive: {
                        0: {
                            items: 1,
                            margin: 10
                        },
                        600: {
                            items: 2,
                            margin: 20
                        },
                        1000: {
                            items: 3,
                            margin: 30
                        }
                    }
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof jQuery !== 'undefined' && typeof $.fn.owlCarousel !== 'undefined') {
                $('.project-carousel-2').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });

                var storySlideCount = $('.our-story-carousel .our-story-slide').length;
                $('.our-story-carousel').owlCarousel({
                    loop: storySlideCount > 1,
                    margin: 30,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayHoverPause: true,
                    items: 1,
                    slideBy: 1,
                    navText: ['<span>&#10094;</span>', '<span>&#10095;</span>']
                });
            } else {
                console.warn('jQuery ou Owl Carousel non chargé(s). Vérifiez l’inclusion des scripts.');
            }
        });
    </script>
@endsection
