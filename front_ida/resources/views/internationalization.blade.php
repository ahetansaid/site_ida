@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title style-two centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li><a href="projects">Projects</a></li>
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
<!-- cta-section -->
<section class="mb-5 mt-3">
        <div class="inner-container clearfix">
            <div class="title ml-5">
                <h2>If you want to partecipate to our projects <a href="/contact-us" style="color:#2D8A4A">Contactez-nous</a> filling the form</h2>
            </div>
        </div>
</section>
<!--<section class="cta-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title pull-left">
                <h2>If you want to participate in our projects, fill the form and</h2>
            </div>
            <div class="btn-box pull-right">
                <a href="/contact-us">Contactez-nous</a>
            </div>
        </div>
    </div>
</section> -->
<!-- cta-section end -->
@endsection
