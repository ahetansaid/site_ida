@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title style-two centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li><a href="ada-boutros-boutros-ghali">Boutros Boutros-Ghali</a></li>
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
                    <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/ada/Boutros-Boutros-Ghali-ada.webp" alt=""></figure>
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
                            <h5>Boutros Boutros-Ghali (14 November 1922 – 16 February 2016)</h5>
                            <h2>History</h2>
                        </div>
                        <div class="text">
                            <p>
                                <b>Boutros Boutros-Ghali</b> (14 November 1922 – 16 February 2016) was an Egyptian politician and diplomat who was the sixth Secretary-General of the United Nations (UN).
                            </p>
                            <p>
                                Boutros Boutros-Ghali was a descendant of one of Egypt’s Coptic Christian families, he received a bachelor’s degree from Cairo University in 1946 and a Ph.D. in international law from the University of Paris in 1949. He then held a professorship at Cairo University and lectured in international law and international affairs at various universities and institutes in the United States, Europe, India, the Middle East, and Africa.
                            </p>
                            <p>
                                As UN secretary-general from 1992, Boutros-Ghali vigorously supported UN mediation in post-Cold War strife. His term saw lengthy and difficult peacekeeping operations in Bosnia and Herzegovina, Somalia, and Rwanda. The United States, a permanent member of the UN Security Council, became dissatisfied with Boutros-Ghali’s independent leadership and successfully blocked his bid for a second term as secretary-general in 1996; his term ended in December of that year. From 2003 to 2006 he chaired the board of South Centre, an intergovernmental think tank for developing countries.
                            </p>
                            <p>
                                The World knows very well that Boutros Boutros-Ghali was the Egyptian official who was most associated with African countries. Even his nomination for the office of secretary-general of the UN was primarily supported by a number of African countries.
                            </p>
                            <p>
                                After leaving the UN, Boutros Boutros-Ghali headed the Organization Internationale de la Francophonie as its first secretary-general; he also chaired Egypt’s National Council for Human Rights.
                            </p>
                            <p>
                                Boutros Boutros-Ghali was one of the main sponsor for the ADA foundation and IDA supporter.
                            </p>
                            <p>
                                Boutros-Ghali passed away on Feb. 16, 2016, at the age of 93, in a hospital in Cairo after a fight against illness.
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
