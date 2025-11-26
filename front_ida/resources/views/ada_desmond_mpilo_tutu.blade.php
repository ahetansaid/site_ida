@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title style-two centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li><a href="ada-desmond-mpilo-tutu">Desmond Mpilo Tutu</a></li>
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


<!-- skills-section -->
<section class="skills-section">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div class="image-box">
                    <div class="anim-icon">
                        <div class="icon icon-1" style="background-image: url(assets/images/icons/anim-icon-2.png);"></div>
                    </div>
                    <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/ada/Desmond-Tutu_resized.jpg-ada.webp" alt="Desmond-Tutu"></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div id="content_block_13">
                    <div class="content-box">
                        <div class="anim-icon">
                            <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
                            <div class="icon icon-2 float-bob-y" style="background-image: url(assets/images/icons/anim-icon-3.png);"></div>
                        </div>
                        <div class="sec-title-two">
                            <h5>Desmond Mpilo Tutu (7 October 1931 – 26 December 2021)</h5>
                            <h2>HISTORY</h2>
                        </div>
                        <div class="text">
                            <p>
                                <b>Desmond Mpilo</b> Tutu (7 October 1931 – 26 December 2021) was a South African Anglican bishop and theologian, known for his work as an anti-apartheid and human rights activist. He was the bishop of Johannesburg from 1985 to 1986 and then the archbishop of Cape Town from 1986 to 1996, in both cases being the first black African to hold the position.
                            </p>
                            <p>
                                Desmond Tutu has formulated his objective as “a democratic and just society without racial divisions” and became the first black General Secretary of the South African Council of Churches. The Boer churches have disassociated themselves from the organization as a result of the unambiguous stand it has made against apartheid. Around 80 percent of its members are black, and they now dominate the leading positions.
                            </p>
                            <p>
                                The award of the 1984 Nobel Prize for Peace to Desmond Tutu sent a significant message to South African Pres. P.W. Botha’s administration.
                            </p>
                            <p>
                                Desmond Tutu was an honorary doctor of a number of leading universities in the USA, Britain and Germany.
                            </p>
                            <p>
                                During his life Desmond Tutu met several times the ADA/IDA founders to discuss about the peace and development in Africa to reduce poverty, hunger and inequality.
                            </p>
                            <p>
                                Desmond Tutu died the 26 December 2021.
                            </p>
                            <p>
                                Image by Africa.com LLC
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- skills-section end -->
@endsection
