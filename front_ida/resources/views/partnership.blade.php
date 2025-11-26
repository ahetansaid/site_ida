@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title centred">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Partenariat International</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- project-style-three -->
<section class="project-style-three centred">
    <div class="auto-container">
        <div class="sec-title-two">
            <h2>A list of our partners</h2>
        </div>
        <div class="">
            <div class="items-container row clearfix">
                @foreach($partners as $partner)
                <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                    <div class="project-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                @if($partner->image)
                                    <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" title="{{ $partner->name }}">
                                @else
                                    <img src="{{ asset('assets/images/partnership/partners/default.png') }}" alt="{{ $partner->name }}" title="{{ $partner->name }}">
                                @endif
                            </figure>
                            <div class="content-box h-75 overflow-auto">
                                <h5>{{ $partner->name }}</h5>
                                @if($partner->description)
                                    <h5>{{ $partner->description }}</h5>
                                @endif
                                @if($partner->website_url)
                                    <a href="{{ $partner->website_url }}" target="_blank">Their website</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- project-style-three end -->
@endsection

