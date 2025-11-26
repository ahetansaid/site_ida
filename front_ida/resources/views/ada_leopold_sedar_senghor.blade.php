@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title style-two centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li><a href="ada-leopold-sedar-senghor">Léopold Sédar Senghor</a></li>
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
                    <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/ada/Leopold-Sedar-Senghor.jpg-ada.webp" alt="Léopold Sédar Senghor"></figure>
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
                            <h5>Léopold Sédar Senghor (9 October 1906 – 20 December 2001)</h5>
                            <h2>HISTORY</h2>
                        </div>
                        <div class="text">
                            <p>
                                <b>Léopold Sédar Senghor</b> (9 October 1906 – 20 December 2001) was a Senegalese poet, politician and cultural theorist who, for two decades, served as the first president of Senegal (1960–80). Ideologically an African socialist, he was the major theoretician of Négritude. Senghor was the first African elected as a member of the Académie française. He won the 1985 International Nonino Prize in Italy. He is regarded by many as one of the most important African intellectuals of the 20th century.
                            </p>
                            <p>
                                As president, Senghor tried to modernize Senegal’s agriculture, instill a sense of enlightened citizenship, combat corruption and inefficiency, forge closer ties with his African neighbors, and continue cooperation with the French. He advocated a form of socialism that was based on African realities and was often called African socialism. Senghor’s socialism was democratic and humanistic, and it shunned such slogans as dictatorship of the proletariat. President Senghor was a vigorous spokesman for the Third World, he protested unfair terms of trade that worked to the disadvantage of African nations.
                            </p>
                            <p>
                                The political career of president, Senghor was replete with paradoxes. Although a Roman Catholic and a Serer, he headed a predominantly Muslim, Wolof nation. An outstanding intellectual, he drew his main support from the peasants. A fervent supporter of African culture, he also appreciated the cultural contributions of the West. A distinguished poet, he was in addition a professional politician of great skill who guided his nation to independence and proved to be an able and effective leader.
                            </p>
                            <p>
                                During his life Léopold Sédar Senghor met several times the ADA/IDA founders to discuss about the continent peace and development.
                            </p>
                            <p>
                                Picture by Accademia Mondiale della Poesia.
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
