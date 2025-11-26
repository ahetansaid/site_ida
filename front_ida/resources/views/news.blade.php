@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title style-two centred" style="background-image: url(assets/images/background/mondo-slogan-Cultura-e-Culture.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Actualités</li>
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


<!-- news-section -->
<section class="news-section blog-grid sec-pad sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix ">

                    @foreach ($all_news as $news)
                    <div class="col-lg-4 col-md-6 col-sm-6 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="/detail_news/{{ $news->id }}"><img style=" height: 280px;" src="{{ asset('storage/' . $news->image) }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="post-info">
                                       
                                        <li>{{
                                                ucfirst(\Carbon\Carbon::parse($news->published_at)
                                                    ->locale('fr')
                                                    ->translatedFormat('F j, Y')) 
                                            }}</li>
                                        <li class="share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h3><a href="/detail_news/{{ $news->id }}">{{$news->title}}</a></h3>
                                     <p class="card-text text-muted">{{ Str::limit(strip_tags($news->content), 100) }}</p>
                                    
                                    <div class="link"><a href="/detail_news/{{ $news->id }}"><i class="fas fa-arrow-right"></i><span>En savoir plus</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
                <!-- <div class="pagination-container">
                    {{ $all_news->links() }}
                </div> -->
            </div>
            
        </div>

    </div>
</section>
<!-- news-section end -->
@endsection
