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
            <div class="news-grid-container">
                @php
                    $firstRowNews = $all_news->take(4);
                    $secondRowNews = $all_news->skip(4)->take(4);
                @endphp

                <!-- Première ligne - 4 nouvelles -->
                <div class="news-row">
                    @foreach ($firstRowNews as $news)
                        <div class="news-block-compact">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="/detail_news/{{ $news->id }}">
                                        <img style="height: 200px;" src="{{ asset('storage/' . $news->image) }}"
                                            alt="">
                                    </a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="/detail_news/{{ $news->id }}">{{ $news->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Deuxième ligne - 4 nouvelles -->
                <div class="news-row">
                    @foreach ($secondRowNews as $news)
                        <div class="news-block-compact">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="/detail_news/{{ $news->id }}">
                                        <img style="height: 200px;" src="{{ asset('storage/' . $news->image) }}"
                                            alt="">
                                    </a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="/detail_news/{{ $news->id }}">{{ $news->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- b2b-section -->
    <section class="events-hero-section">
        <div class="auto-container">
            <div class="section-header-events">
                <div class="section-badge-events">Événements</div>
                <h2 class="section-title-events">Participez à nos événements</h2>
                <p class="section-subtitle-events">Découvrez nos prochains rendez-vous et opportunités de networking</p>
            </div>

            <div class="events-showcase-wrapper">
                <div class="project-carousel-2 owl-carousel owl-theme owl-nav-none">
                    @if (isset($events) && $events->isNotEmpty())
                        @foreach ($events as $event)
                            <div class="event-showcase-card">
                                <div class="event-showcase-inner">
                                    <!-- Image principale mise en valeur -->
                                    <div class="event-hero-image">
                                        <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('assets/images/b2b/1.png') }}"
                                            alt="{{ $event->title }}">
                                        <div class="image-gradient-overlay"></div>
                                        <!-- Badge date avec accent orange -->
                                        <div class="event-date-badge-orange">
                                            <div class="date-number">
                                                {{ \Carbon\Carbon::parse($event->start_date)->format('d') }}</div>
                                            <div class="date-text">
                                                {{ \Carbon\Carbon::parse($event->start_date)->format('M Y') }}</div>
                                        </div>
                                    </div>

                                    <!-- Contenu avec accent orange -->
                                    <div class="event-hero-content">
                                        <div class="event-category-badge">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Événement</span>
                                        </div>
                                        <h3 class="event-hero-title">{{ $event->title }}</h3>
                                        <div class="event-info-row">
                                            <div class="info-item">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>{{ $event->location }}</span>
                                            </div>
                                            <div class="info-item">
                                                <i class="far fa-clock"></i>
                                                <span>{{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y à H:i') }}</span>
                                            </div>
                                        </div>
                                        <p class="event-hero-description">{{ Str::limit($event->description, 150) }}</p>
                                        <a href="https://nourdignagrimarket.com/fr/" class="event-cta-button"
                                            target="_blank">
                                            <span>S'inscrire</span>
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="event-showcase-card">
                            <div class="event-showcase-inner">
                                <div class="event-hero-image">
                                    <img src="{{ asset('assets/images/b2b/1.png') }}" alt="Aucun événement">
                                    <div class="image-gradient-overlay"></div>
                                </div>
                                <div class="event-hero-content">
                                    <div class="event-category-badge">
                                        <i class="fas fa-info-circle"></i>
                                        <span>Information</span>
                                    </div>
                                    <h3 class="event-hero-title">Aucun événement à venir</h3>
                                    <p class="event-hero-description">Revenez bientôt pour découvrir nos prochains
                                        événements !</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Section principale avec accent orange */
        .events-hero-section {
            padding: 100px 0;
            background: #ffffff;
            position: relative;
        }

        .events-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, transparent, #F38C1F, transparent);
        }

        /* En-tête de section */
        .section-header-events {
            text-align: center;
            margin-bottom: 70px;
        }

        .section-badge-events {
            display: inline-block;
            padding: 10px 24px;
            background: #F38C1F;
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(243, 140, 31, 0.3);
        }

        .section-title-events {
            font-size: 48px;
            font-weight: 800;
            color: #1a1a1a;
            margin: 0 0 18px 0;
            line-height: 1.2;
        }

        .section-subtitle-events {
            font-size: 18px;
            color: #666666;
            margin: 0;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        /* Wrapper du carousel */
        .events-showcase-wrapper {
            position: relative;
            padding: 30px 0;
        }

        .event-showcase-card {
            padding: 0 15px;
        }

        /* Carte principale - Image mise en valeur */
        .event-showcase-inner {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .event-showcase-inner:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 50px rgba(243, 140, 31, 0.2);
        }

        /* Image principale - Grande taille mise en valeur */
        .event-hero-image {
            position: relative;
            width: 100%;
            height: 450px;
            overflow: hidden;
            background: #f5f5f5;
        }

        .event-hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .event-showcase-inner:hover .event-hero-image img {
            transform: scale(1.08);
        }

        /* Overlay avec accent orange */
        .image-gradient-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60%;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.5) 100%);
            z-index: 1;
        }

        /* Badge date avec accent orange */
        .event-date-badge-orange {
            position: absolute;
            top: 25px;
            left: 25px;
            background: #F38C1F;
            border-radius: 12px;
            padding: 16px 20px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(243, 140, 31, 0.4);
            z-index: 3;
            min-width: 80px;
        }

        .date-number {
            display: block;
            font-size: 36px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1;
            margin-bottom: 4px;
        }

        .date-text {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.95;
        }

        /* Contenu de la carte */
        .event-hero-content {
            padding: 35px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background: #ffffff;
        }

        /* Badge catégorie */
        .event-category-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            background: rgba(243, 140, 31, 0.1);
            color: #F38C1F;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 4px;
            margin-bottom: 18px;
            width: fit-content;
        }

        .event-category-badge i {
            font-size: 11px;
        }

        /* Titre */
        .event-hero-title {
            font-size: 28px;
            font-weight: 800;
            color: #1a1a1a;
            margin: 0 0 20px 0;
            line-height: 1.3;
            transition: color 0.3s ease;
        }

        .event-showcase-inner:hover .event-hero-title {
            color: #F38C1F;
        }

        /* Informations (lieu et date) */
        .event-info-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e8e8e8;
        }

        .info-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #666666;
            font-weight: 500;
        }

        .info-item i {
            color: #F38C1F;
            font-size: 14px;
        }

        /* Description */
        .event-hero-description {
            font-size: 15px;
            color: #666666;
            line-height: 1.8;
            margin: 0 0 25px 0;
            flex-grow: 1;
        }

        /* Bouton CTA avec accent orange */
        .event-cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 28px;
            background: #F38C1F;
            color: #ffffff;
            font-weight: 700;
            font-size: 15px;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            width: fit-content;
            box-shadow: 0 4px 15px rgba(243, 140, 31, 0.3);
        }

        .event-cta-button:hover {
            background: #e67d1a;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(243, 140, 31, 0.4);
            color: #ffffff;
        }

        .event-cta-button i {
            transition: transform 0.3s ease;
        }

        .event-cta-button:hover i {
            transform: translateX(5px);
        }

        /* Navigation du carousel avec accent orange */
        .events-hero-section .owl-nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 50px;
        }

        .events-hero-section .owl-nav button {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #ffffff !important;
            color: #F38C1F !important;
            border: 2px solid #F38C1F !important;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px !important;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(243, 140, 31, 0.15);
        }

        .events-hero-section .owl-nav button:hover {
            background: #F38C1F !important;
            color: #ffffff !important;
            border-color: #F38C1F !important;
            transform: scale(1.1);
            box-shadow: 0 6px 25px rgba(243, 140, 31, 0.4);
        }

        /* Dots du carousel */
        .events-hero-section .owl-dots {
            text-align: center;
            margin-top: 35px;
        }

        .events-hero-section .owl-dots button.owl-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #e0e0e0 !important;
            margin: 0 6px;
            transition: all 0.3s ease;
        }

        .events-hero-section .owl-dots button.owl-dot.active {
            background: #F38C1F !important;
            width: 32px;
            border-radius: 6px;
        }

        /* Responsive Design */
        @media (max-width: 991.98px) {
            .events-hero-section {
                padding: 80px 0;
            }

            .section-title-events {
                font-size: 38px;
            }

            .section-subtitle-events {
                font-size: 16px;
            }

            .event-hero-image {
                height: 380px;
            }

            .event-hero-content {
                padding: 28px;
            }
        }

        @media (max-width: 767.98px) {
            .events-hero-section {
                padding: 60px 0;
            }

            .section-header-events {
                margin-bottom: 50px;
            }

            .section-title-events {
                font-size: 32px;
            }

            .section-subtitle-events {
                font-size: 15px;
            }

            .event-hero-image {
                height: 320px;
            }

            .event-date-badge-orange {
                top: 15px;
                left: 15px;
                padding: 12px 16px;
            }

            .date-number {
                font-size: 28px;
            }

            .date-text {
                font-size: 10px;
            }

            .event-hero-content {
                padding: 24px;
            }

            .event-hero-title {
                font-size: 24px;
            }

            .event-info-row {
                flex-direction: column;
                gap: 12px;
            }

            .event-cta-button {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <!-- b2b-section end -->



    <!-- Section Nos Projets supprimée -->

    <!-- Our Story Section -->
    <section class="project-style-four">
        <div class="auto-container">
            <div class="title-inner clearfix">
                <div class="sec-title style-four right pull-left">
                    <h5>À propos</h5>
                    <h2>IDA Top Level Meetings - IDA International</h2>
                </div>
            </div>
            @if (isset($ourStories) && $ourStories->isNotEmpty())
                @php
                    $storyChunks = $ourStories->chunk(5);
                    $firstRow = $storyChunks->first();
                    $secondRow = $storyChunks->skip(1)->first();
                @endphp
                <div class="our-story-grid-container">
                    <!-- Première ligne - 5 images -->
                    @if ($firstRow)
                        <div class="our-story-row">
                            @foreach ($firstRow as $story)
                                <div class="our-story-card">
                                    <div class="story-image-wrapper">
                                        <img src="{{ $story->image ? asset('storage/' . $story->image) : asset('assets/images/placeholder.png') }}"
                                            alt="{{ $story->title }}">
                                    </div>
                                </div>
                            @endforeach
                            @for ($i = $firstRow->count(); $i < 5; $i++)
                                <div class="our-story-card placeholder-card">
                                    <div class="story-image-wrapper">
                                        <img src="{{ asset('assets/images/placeholder.png') }}" alt="Placeholder">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    @endif

                    <!-- Deuxième ligne - 5 images -->
                    @if ($secondRow)
                        <div class="our-story-row">
                            @foreach ($secondRow as $story)
                                <div class="our-story-card">
                                    <div class="story-image-wrapper">
                                        <img src="{{ $story->image ? asset('storage/' . $story->image) : asset('assets/images/placeholder.png') }}"
                                            alt="{{ $story->title }}">
                                    </div>
                                </div>
                            @endforeach
                            @for ($i = $secondRow->count(); $i < 5; $i++)
                                <div class="our-story-card placeholder-card">
                                    <div class="story-image-wrapper">
                                        <img src="{{ asset('assets/images/placeholder.png') }}" alt="Placeholder">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    @endif
                </div>
            @else
                <div class="our-story-grid-container">
                    <!-- Première ligne vide -->
                    <div class="our-story-row">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="our-story-card placeholder-card">
                                <div class="story-image-wrapper">
                                    <img src="{{ asset('assets/images/placeholder.png') }}" alt="Placeholder">
                                </div>
                            </div>
                        @endfor
                    </div>
                    <!-- Deuxième ligne vide -->
                    <div class="our-story-row">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="our-story-card placeholder-card">
                                <div class="story-image-wrapper">
                                    <img src="{{ asset('assets/images/placeholder.png') }}" alt="Placeholder">
                                </div>
                            </div>
                        @endfor
                    </div>
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

        .our-story-grid-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .our-story-row {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .our-story-card,
        .our-story-placeholder .our-story-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            flex: 0 0 calc(20% - 12px);
            max-width: calc(20% - 12px);
            min-width: 180px;
        }

        .our-story-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
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

        /* Styles pour la grille de nouvelles compacte */
        .news-grid-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 40px;
        }

        .news-row {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .news-block-compact {
            flex: 0 0 calc(25% - 11.25px);
            max-width: calc(25% - 11.25px);
            min-width: 200px;
        }

        .news-block-compact .inner-box {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .news-block-compact .inner-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        .news-block-compact .image-box {
            position: relative;
            overflow: hidden;
        }

        .news-block-compact .image-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-block-compact .inner-box:hover .image-box img {
            transform: scale(1.05);
        }

        .news-block-compact .lower-content {
            padding: 20px;
            text-align: center;
        }

        .news-block-compact .lower-content h3 {
            font-size: 1rem;
            font-weight: 600;
            color: #2c3e50;
            margin: 0;
            line-height: 1.4;
        }

        .news-block-compact .lower-content h3 a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .news-block-compact .lower-content h3 a:hover {
            color: #f3c56a;
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

            .news-row {
                flex-direction: column;
                align-items: center;
            }

            .news-block-compact {
                flex: 0 0 100%;
                max-width: 100%;
                min-width: unset;
            }
        }

        @media (max-width: 992px) {
            .news-row {
                gap: 10px;
            }

            .news-block-compact {
                flex: 0 0 calc(50% - 5px);
                max-width: calc(50% - 5px);
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

            } else {
                console.warn('jQuery ou Owl Carousel non chargé(s). Vérifiez l’inclusion des scripts.');
            }
        });
    </script>
@endsection
