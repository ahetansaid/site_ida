@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title style-two centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li><a href="news.html">News</a></li>
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

<!-- about-style-two -->
<section class="about-style-two about-page-1 bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-12 content-column">
                <div id="content_block_three">
                    <div class="content-box">
                        <div class="sec-title right">
                            <h5>News History</h5>
                        </div>
                        <div class="text">
                            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris voluptate velit excepteur duis aute irure dolor voluptate voluptatem accusa ntium dolor lemq laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis ent quas sed ipsum dui architecto beatae.</p>
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn font-italic" data-tab="#tab-1">ADA News before IDA</li>
                                    <li class="tab-btn font-italic" data-tab="#tab-2">IDA News 2009</li>
                                    <li class="tab-btn font-italic" data-tab="#tab-3">IDA News 2010</li>
                                    <li class="tab-btn font-italic" data-tab="#tab-4">IDA News 2011</li>
                                    <li class="tab-btn font-italic" data-tab="#tab-5">IDA News 2012</li>
                                    <li class="tab-btn font-italic" data-tab="#tab-6">IDA News 2013</li>
                                    <li class="tab-btn font-italic" data-tab="#tab-7">IDA News 2014</li>
                                </ul>
                            </div>
                            <div class="tabs-content centred">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/Mandela1-200x200260x270-260x270-260x270.jpg" alt="Mandela" title="Mandela"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Benoit NGom ADA President meet Nelson Mandela in Johannesburg.</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/S.A.R-Prince-Bokpe-en-seance-de-travail-avec-S.E.-Mathie-200x200260x270-260x270-260x270.jpg" alt="S.A.R-Prince-Bokpe-en-seance-de-travail-avec-S.E.-Mathie" title="S.A.R-Prince-Bokpe-en-seance-de-travail-avec-S.E.-Mathie"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>S.K.H. Prinz BOKPE von Allada meet S.E.M KEREKOU Benin President</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/Muammar-al-Kadafi-200x200260x270-260x270-260x270.jpg" alt="Muammar-al-khadafi"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Benoit NGom ADA President meet Muammar al KADHAFI</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/Russia-200x200260x270-260x270-260x270.jpg" alt="Russia" title="Russia"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>The Representative of the ADA for the Russian Federation, Mr. Gabriel KOTCHOFA, with the President of the Russian Federal Council (Federal Council), SE Mr. Serguei Mironov and the Russian Minister of Education SE Mr. Andre FOURSINKO</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/SovietFederation-10-Juillet2006-015-200x200260x270-260x270-260x270.jpg" alt="SovietFederation-10-Juillet2006-015" title="SovietFederation-10-Juillet2006-015"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>ADA Meeting with Soviet Federation Members</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/MEDWEDEW-200x200260x270-260x270-260x270.jpg" alt="MEDWEDEW" title="MEDWEDEW"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>The Representative of the ADA for the Russian Federation, Mr. Gabriel KOTCHOFA, with the Russian president Mr Dimitri Anatolievich DMITRY MEDVEDEV</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/S.K.H-Prinz-Bokpe-und-S.E.-Yayi-Boni-Staatspraesidenten-200x200260x270-260x270-260x270.jpg" alt="S.K.H-Prinz-Bokpe-und-S.E.-Yayi-Boni-Staatspraesidenten" title="S.K.H-Prinz-Bokpe-und-S.E.-Yayi-Boni-Staatspraesidenten"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>President Dr. Boni Yayi and Prince v. Bokpe Allada 23rd Oct 2006 – Inauguration of the Embassy of Benin in Berlin</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/S.E-Botschafter-Dr.-Conze-Herr-Zschornak-Buergermeis-200x200260x270-260x270-260x270.jpg" alt="S.E-Botschafter-Dr.-Conze-Herr-Zschornak-Buergermeis" title="S.E-Botschafter-Dr.-Conze-Herr-Zschornak-Buergermeis"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>S.E. Dr. Conze, FRG Ambassador of Benin, Mr Zschomak, mayor of Nebelschütz,
                                                        meet HRH Prince Bokpe v. Allada, in the German Embassy in Cotonou on January 07</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/FrancoisXerri-JAO-BERNADO-VIEIRA-200x200260x270-260x270-260x270.jpg" alt="FrancoisXerri-JAO-BERNADO-VIEIRA" title="FrancoisXerri-JAO-BERNADO-VIEIRA"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>His Excellency Mr. JAO Bernardo Vieira, President of the Republic of Guinea Bissau (right) with Mr François Xerri, special Advisor of ADA President.</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/Sapori-Italiani-nel-Mondo-1-200x200260x270-260x270-260x270.jpg" alt="Sapori-Italiani-nel-Mondo-1" title="Sapori-Italiani-nel-Mondo-1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Andrea Giannetto – UCEE Managing Director introduce the European Agriculture Strategy at the European Commission</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/FrancoisXerri-DEMBA-DAHABA-200x200260x270-260x270-260x270.jpg" alt="FrancoisXerri-DEMBA-DAHABA" title="FrancoisXerri-DEMBA-DAHABA"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Mr. DEMBA Dahaba, Minister of Economy and Regional Integration (right)
                                                        with Mr François Xerri, special Advisor of ADA President.</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/Libia-200x200260x270-260x270-260x270.jpg" alt="Libia" title="Libia"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>International Symposium in Sirte – Libya, organized by the Cultural Council of the Socialist People's Libyan Arab Jamahiriya and the Académie Diplomatique Africaine "(ADA), 6 to 9 September 2007 From left to right:
                                                        Professor AGBOBLI, Marie Roger Biloa (editor of the magazine "Africa") and Dr.Benoît Ngom (President of the ADA)</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/PrBenin1-200x200260x270-260x270-260x270.jpg" alt="PrBenin1" title="PrBenin1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>ADA Diplomatic Mission in Benin Le Prince BOKPE (Chargé de Mission de l'ADA) Monsieur YAYI BONI (Président de la République du Bénin) Monsieur François XERRI (Conseiller Spécial du Président de l'ADA) Monsieur Benoit NGOM (Président Fondateur de l'ADA)</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/BundeskanzlerSchroederPrinzBokpeUnd-FrDrKoch-200x200260x270-260x270-260x270.jpg" alt="BundeskanzlerSchroederPrinzBokpeUnd-FrDrKoch" title="BundeskanzlerSchroederPrinzBokpeUnd-FrDrKoch"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Angela Koch, Prince v. Bokpe Allada and former Chancellor Gerhard Schroeder (left to right) on the occasion of National Day of the United Arab Emirates on 4 December 2007 in the UAE embassy in Berlin.</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/Berlin-200x194260x270-260x270-260x270.jpg" alt="Berlin" title="Berlin"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Presentation ceremony of the Académie Diplomatique Africaine (ADA) in Berlin on 18 June 2008.</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/UCEE-Costa-d-Avorio-200x200260x270-260x270-260x270.jpg" alt="UCEE-Costa-d-Avorio" title="UCEE-Costa-d-Avorio"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>UCEE donation of medicines in Ivory Coast in collaboration with ADA</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/2-octobre-2008-Paris-7-Lewin-200x200260x270-260x270-260x270.jpg" alt="2-octobre-2008-Paris-7-Lewin" title="2-octobre-2008-Paris-7-Lewin"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>André Lewin, ADA member and former Ambassador of France and Spokesperson of the U.N. on 2 October 2008 in Paris</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/Vernissage-NZE-21.062008-200x190260x270-260x270-260x270.jpg" alt="Vernissage-NZE-21.062008" title="Vernissage-NZE-21.062008"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Vernissage of artist Michelle NZE on 21/06/2008 at Park Dental at the initiative of HRH Prince Bokpe of Allada, International Executive Secretary of the ADA, in the presence of various African Ambassador Berlin: S.E. the Ambassador of Burundi, S.E. the Ambassador of Nigeria, artist Michelle NZE, Heny Schmedtmann, SE the Ambassador of Burkina Faso, S.E. the Ambassador of Gabon, S.K.H. Prince Bokpe of Allada, Prof. Schmedtmann</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_news_before_IDA/NGom-Jacques-Chirac-200x200260x270-260x270-260x270.jpg" alt="NGom-Jacques-Chirac" title="NGom-Jacques-Chirac"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Benoit NGom ADA President meet Jacques Chirac Franch President</p>
                                                </div>
                                                <!--                                                    <div class="lower-content">-->
                                                <!--                                                        <div class="inner">-->
                                                <!--                                                            <h4><a href="index-2.html">For Individuals</a></h4>-->
                                                <!--                                                        </div>-->
                                                <!--                                                    </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/Europe-Middle-East.jpg260x270-260x270-260x270.webp" alt="Europe-Middle-East" title="Europe-Middle-East"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>His Ex Mr. Dya Bamakhrama – Ambassador of Djibouti, Saudi Arabia and Andrea Giannetto UCEE Managing Director and IDA President.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h6><b>EUROPE & MIDDLE EAST</b> | Projects Development & Coordination in Partnership Meeting arranged by UCEE, ECT, IDA and SHRIAN</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/Europe-Middle-East1.jpg260x270-260x270-260x270.webp" alt="Europe-Middle-East1" title="Europe-Middle-East1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Mrs. Patrizia Meoli for E.C.T, Antonio Panzeri from the European Parliament, Camillo Meoli E.C.T., Faysel Alasmy, Paolo Saba for U.C.E.E.President , and Andrea Giannetto U.C.E.E. Managing Director and IDA President.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h6><b>EUROPE & MIDDLE EAST</b> | Projects Development & Coordination in Partnership Meeting arranged by UCEE, ECT, IDA and SHRIAN</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/Diplome-Koroma.jpg260x270-260x270-260x270.webp" alt="Diplome-Koroma" title="Diplome-Koroma"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Ceremony for the presentation of the Honorary President of the ADA His Excellency Ernest Bai KOROMA President of the Republic of SIERRA LEONE
                                                        His Excellency Ernest Bai KOROMA President of the Republic of SIERRA LEONE and Dr. Benoit NGom ADA President</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h6>Honorary President of the ADA</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/erasmus.jpg260x270-260x270-260x270.webp" alt="erasmus" title="erasmus"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>UCEE and IDA present to the press the ERASMUS DAY LIVE <br>
                                                        Press Conference attendee: <br>
                                                        Dott. Paolo Saba – Presidente UCEE <br>
                                                        Dott. Andrea Giannetto – Direttore Generale UCEE, IDA President
                                                        <br>
                                                        Prof. Francesco Profumo – Magnifico Rettore Politecnico di Torino
                                                        <br>
                                                        Prof.ssa Maria Lodovica Gullino – Vice-Rettore per lo sviluppo delle relazioni
                                                        <br>
                                                        internazionali Università degli Studi di Torino <br>
                                                        Dott.ssa Marta Levi – Assessore al Decentramento e all'Area metropolitana
                                                        <br>
                                                        Città di Torino, delega Politiche per i giovani <br>
                                                        Dott.ssa Monica Cellerino – Direttore Commerciale Piemonte Nord e Valle d'Aosta
                                                        <br>
                                                        UniCredit Banca <br>
                                                        Dott. Luca Picotti – Brand Manager Pernod Ricard Italia <br>
                                                        On. Mario Borghezio – Eurodeputato <br>
                                                        On. Pier Antonio Panzeri – Eurodeputato <br>
                                                        Moderatore: Dott. Dario Martinetti – Direttore Artistico "Erasmus Day Live"
                                                        Moderatore: Dott. Dario Martinetti – Direttore Artistico “Erasmus Day Live”
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h6>ERASMUS DAY LIVE presentation</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/Monaco_in_Ges.jpg260x270-260x270-260x270.webp" alt="Monaco_in_Ges" title="Monaco_in_Ges"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Prince Prince Albert II of Monaco and v. S.K.H. Prince v. Bokpe Allada – Benin (3rd 2, 2009)</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Prince Prince Albert II of Monaco</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/Bundesminister-a.D.-Klaus-Toepfer-im-Gespraech-mit-Prinz-Bokpe-2260x270-260x270-260x270.jpg" alt="Bundesminister-a.D.-Klaus-Toepfer-im-Gespraech-mit-Prinz-Bokpe" title="Bundesminister-a.D.-Klaus-Toepfer-im-Gespraech-mit-Prinz-Bokpe"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Federal Minister A.D. Klaus Toepfer in conversation with the International Executive Secretary of the Académie Diplomatique Africaine (ADA) Prince v. Bokpe Allada on 2 February 2009 during Fashion Week in Dusseldorf.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Fashion Week in Dusseldorf</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/S.E.-Ministre-Fautrier-President-de-la-Fondation-Princ.jpg260x270-260x270-260x270.webp" alt="S.E.-Ministre-Fautrier-President-de-la-Fondation-Princ" title="S.E.-Ministre-Fautrier-President-de-la-Fondation-Princ"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Minister Plenipotentiary of the Principality of Monaco SE B. Fautrier and S.K.H. Prince Bokpe of Allada Benin (3rd 2, 2009)</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Minister of the Principality of Monaco</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/Spain1.jpg260x270-260x270-260x270.webp" alt="Spain1" title="Spain1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>A delegation of the International Panel of the Académie Diplomatique Africaine (ADA) occasion of the celebration of the presentation of the ADA in Spain on 9 March 2009 in Alicante.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>ADA in Spain</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/NH_Fest1_009_Kopie.jpg260x270-260x270-260x270.webp" alt="NH_Fest1_009_Kopie" title="NH_Fest1_009_Kopie"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>EPrince v. Bokpe Allada, international executive secretary of the Academie Diplomatique Africaine (ADA) and Dr. Koch, his deputy present, Mr. Dieter Heisig at the Christmas party on the 19th of JCNeckermann in Würzburg, the certificate of appointment as a member of the ADA.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>19th of JCNeckermann in Würzburg</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2009/ABU-DHABI-28-Gennaio-2009.jpg260x270-260x270-260x270.webp" alt="ABU-DHABI-28-Gennaio-2009" title="ABU-DHABI-28-Gennaio-2009"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>UCEE and IDA Business Mission in ABU DHABI</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Business Mission in ABU DHABI</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-3">
                                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Hassan-200x176260x270-260x270-260x270.jpg" alt="Hassan" title="Hassan"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Andrea Giannetto meet Hassan S. Abou Al-Taher manager of H.R.H. Prince Bandar Bin Khalid Bin Abdul Aziz Al Saud</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Meeting in Jedda</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/TSTK-lunch-200x173260x270-260x270-260x270.jpg" alt="TSTK-lunch" title="TSTK-lunch"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Andrea Giannetto IDA President, meet Hassan Eksi President of TSTK NGO in Turkey</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>TSTK lunch</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Kilis1-200x200260x270-260x270-260x270.png" alt="Kilis1" title="Kilis1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Meeting among Kilis Governator, IDA and European entrapreneurs</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Agrofood Platform project in Kilis (Turkey)</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Kilis4-200x200260x270-260x270-260x270.jpg" alt="Kilis4" title="Kilis4"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Visit to the platform site in Kilis</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Agrofood Platform project in Kilis (Turkey)</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Articolo-Kilis-200x200260x270-260x270-260x270.jpg" alt="Articolo-Kilis" title="Articolo-Kilis"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Turkey Press report regarding the TeknoPark in Kilis</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Agrofood Platform project in Kilis (Turkey)</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Andrea-Giannetto-Dirigente-Ucee-e-relatore-del-progetto-Sapori-Italiani-nel-Mondo-Commissione-Europea-Bruxelles-200x200260x270-260x270-260x270.jpg" alt="Andrea-Giannetto-Dirigente-Ucee-e-relatore-del-progetto-Sapori-Italiani-nel-Mondo-Commissione-Europea-Bruxelles" title="Andrea-Giannetto-Dirigente-Ucee-e-relatore-del-progetto-Sapori-Italiani-nel-Mondo-Commissione-Europea-Bruxelles"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Bruxelles – “Sapori Italiani nel Mondo” – Italian flavours in the World.
                                                        <br>
                                                        Andrea Giannetto in the European Commission during the presentation of the Italian flavours in the World project.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Sapori Italiani nel Mondo</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Jeddah-2010-200x163260x270-260x270-260x270.jpg" alt="Jeddah-2010" title="Jeddah-2010"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>JEDDAH – Prince Misha’l Bin Majed Bin Abdul Aziz, the Governor of Jeddah, inaugurated at the Jeddah Center for Forums and Events the three-day Cityscape Jeddah 2010 – the largest real estate investment and development event in Saudi Arabia. IDA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Cityscape Jeddah 2010 kicks off</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Faoro-Romania-200x169260x270-260x270-260x270.jpg" alt="Faoro-Romania" title="Faoro-Romania"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>CONGRESS OF THE ROMANIAN FORUM for MOUNTAIN AREAS IN THE PALACE OF THE SENATE OF ROMANIA, attendance of 200 PERSONALITIES OF THE GOVERNMENT, THE SENATE AND ROMANIAN PERLIAMENT. PROF. ING. FAORO BENIAMINO introduce an UCEE project.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>ROMANIAN FORUM for MOUNTAIN AREAS</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/EBES-Istanbul-2010-200x171260x270-260x270-260x270.jpg" alt="EBES-Istanbul-2010" title="EBES-Istanbul-2010"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Eurasia Business and Economics Society (EBES) – EBES 2010 Conference-Istanbul was held on May 26-28, 2010 in Istanbul, Turkey at Taksim Nippon Hotel with the support of the Central Bank of the Republic of Turkey, Turkdex and Istanbul Economic Research Association.
                                                        IDA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>EBES 2010 Conference – Istanbul</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Conferenza-Stampa-Nasce-la-Fondazione-per-l-Europa-dei-Popoli-Circolo-della-Stampa-Milano-200x190260x270-260x270-260x270.jpg" alt="Conferenza-Stampa-Nasce-la-Fondazione-per-l-Europa-dei-Popoli-Circolo-della-Stampa-Milano" title="Conferenza-Stampa-Nasce-la-Fondazione-per-l-Europa-dei-Popoli-Circolo-della-Stampa-Milano"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Milan – Press conference “Fondazione per l’Europa dei Popoli” Foundation for Europe of the Populations. Paolo Saba UCEE President, On. Mario Borghezio European Parliamentar and Andrea Giannetto IDA President some speakers.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Press conference “Fondazione per l’Europa dei Popoli”</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/Youth-conference-200x118260x270-260x270-260x270.png" alt="Youth-conference" title="Youth-conference"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Climate Change and Sustainable Development 8 -11 NOVEMBER 2010 – GENEVA, SWITZERLAND The conference aims to send a clear and unequivocal message to negotiators at Cancun that young people expect the planet’s protection be placed ahead of all other interests in order to reverse the worst effects of climate change in the short-term and ensure long-term sustainable development.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>GLOBAL YOUTH CONFERENCE</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/resource/feature-4.jpg" alt=""></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Agence de Développent et d’Encadrement des Petites et Moyennes Entreprises (ADEPME)
                                                        <br>
                                                        Centre National de Ressources Educationnelles du Sénégal (CNRE)
                                                        <br>
                                                        But des accords : <br>
                                                        Travailler à déterminer des façons de mieux servir nos membres par le biais de la collaboration.
                                                        <br>
                                                        Elaboration et mise en place d’un programme d’investissement.
                                                        <br>
                                                        De la conception, de la programmation et de la mise en œuvre des programmes de développement
                                                        <br>
                                                        économique et social en y associant les mouvements associatifs et groupement communautaires.
                                                        <br>
                                                        D’élaborer des programmes et projets à soumettre aux partenaires techniques et financiers.
                                                        <br>
                                                        D’assister et d’accompagner les populations et mouvements associatifs dans l’élaboration et la mise en œuvre de leur projets.
                                                        <br>
                                                        De favoriser la conservation et la mise à jour banques de données nécessaire à toute planification
                                                        <br>
                                                        De veiller à l’évaluation périodique des projets réalisés.
                                                        <br>
                                                        De partager leurs expériences avec les autres pays africains.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Accord ADA avec ADEPME et CNRE</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/resource/feature-4.jpg" alt=""></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>International Conference of the European Movement on combating poverty and social exclusion Fundação Montepio – Rua do Ouro nº 219 6º – Lisbon, Portugal
                                                        IDA attendance</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Combating poverty and social exclusion</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2010/LA-STAMPA-Marocco-200x200260x270-260x270-260x270.jpg" alt="LA-STAMPA-Marocco" title="LA-STAMPA-Marocco"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Climate Change and Sustainable Development 8 -11 NOVEMBER 2010 – GENEVA, SWITZERLAND The conference aims to send a clear and unequivocal message to negotiators at Cancun that young people expect the planet’s protection be placed ahead of all other interests in order to reverse the worst effects of climate change in the short-term and ensure long-term sustainable development.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>GLOBAL YOUTH CONFERENCE</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-4">
                                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/france-senegal-200x193260x270-260x270-260x270.jpg" alt="france-senegal" title="france-senegal"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Efficacité économique»&«Gestion durable des Ressources naturelles et énergétiques au Sénégal» Dans le cadre de son programme de révolution verte, le Gouvernement du Sénégal a mis en place une Agence Nationale des Eco-villages (A.N.E.V). L’objectif de cette agence est de promouvoir l’autonomie des villages en énergies propres, en eau et en produits forestiers, sans dégradation de l’environnement, permettant ainsi aux populations de ne générer qu’une faible signature environnementale en réduisant la pression anthropique et en gérant de façon intégrée ses approvisionnements en fruits et légumes, viandes et poissons, en bois d’œuvre et de service, en privilégiant au mieux l’emploi des énergies renouvelables. IDA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h6><b>Colloque Sénégal-France du 11 juillet 2011</b> <br>
                                                            Palais Bourbon –Salle Colbert</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/Xerri-Koroma-200x200260x270-260x270-260x270.jpg" alt="Xerri-Koroma" title="Xerri-Koroma"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Francois Xerri, IDA member meet ERNEST BAI KOROMA, President of the Republic of de SIERRA LEONE</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Mission IDA in Sierra Leone</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/HRH-Seif-200x200260x270-260x270-260x270.jpg" alt="HRH-Seif" title="HRH-Seif"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>IDA and UCEE meet HRH Prince Saif and Shaikh Hadel (Kuwait) for a business mission in Saudi Arabia</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Business mission in Saudi Arabia</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/Obama-Koroma-200x190260x270-260x270-260x270.jpg" alt="Obama-Koroma" title="Obama-Koroma"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>President Ernest Bai Koroma and U.S. President Barak OBama sitting by each other at a recent luncheon hosted by the UN Secretary General , Ban Ki -Moon for world leaders on Wednesday September 21, 2011.
                                                        <br>
                                                        Photo by Cocoriko
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>President Ernest Bai Koroma at UN</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/Obama-with-4-Presidents-200x176260x270-260x270-260x270.jpg" alt="Obama-with-4-Presidents" title="Obama-with-4-Presidents"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>President Barack Obama with, from left: <br>
                                                        President Mahamadou Issoufou of Niger, <br>
                                                        President Boni Yayi of Benin, <br>
                                                        President Alpha Condé of Guinea, <br>
                                                        and President Alassane Ouattara of Cote D’Ivoire. <br>
                                                        ADA attendance. <br>
                                                        Photo by Samantha Appleton/White House</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h5>Obama Meets Four Francophone West African Leaders</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/Turkey-Agency-Milan-200x200260x270-260x270-260x270.jpg" alt="Turkey-Agency-Milan" title="Turkey-Agency-Milan"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Presentation of the Turkey Development Agency in Milan. Advantages to invest in Turkey. President of the Investment Support and Promotion Agency Mr. Alpaslan Korkmaz and Andrea Giannetto testimonial speech.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Turkey Development Agency in Milan</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/DUBAI-lunch-200x200260x270-260x270-260x270.jpg" alt="DUBAI-lunch" title="DUBAI-lunch"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>UCEE and IDA business mission in Dubai. Lunch with local business men.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Dubai Business Mission</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/Lampedusa-100x100260x270-260x270-260x270.jpg" alt="Lampedusa" title="Lampedusa"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Palermo – United by the Mediterranean, PAN Mediterranean conference, for a New Euro-Mediterranean policy. IDA and UCEE collaboration.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>United by the Mediterranean</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/ICC11-200x200260x270-260x270-260x270.jpg" alt="ICC11" title="ICC11"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>The third annual International Capital Conference (ICC), which took place in Paris on November 22-23 2011. Cavendish Group, in partnership with the Boao Forum for Asia and the Federation of Indian Chambers of Commerce and Industry, the Chinese M&A Association and the Chamber of Commerce and Industry of the Russian Federation assembled an audience of more than 400 European and BRIC and other Asian leaders at the Ministry of Economy, Finance and Industry in Paris. Senior policymakers, business leaders and academics were all in attendance, cementing the ICC’s position as the Premier Global Business Event connecting the EU, BRIC and US – the developed and fast developing worlds.
                                                        <br>
                                                        IDA attendance.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>International Capital Conference</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2011/NGO_Conf_Banner-200x111260x270-260x270-260x270.png" alt="NGO_Conf_Banner" title="NGO_Conf_Banner"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Bonn, Germany, is the Host City for the 64th Annual United Nations Conference for Non-Governmental Organizations associated with the Department of Public Information, on the theme “Sustainable Societies; Responsive Citizens”.
                                                        <br>
                                                        IDA attendance.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>64th Annual United Nations Conference for NGOs</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-5">
                                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Mission-Senegal-200x200260x270-260x270-260x270.jpg" alt="Mission-Senegal" title="Mission-Senegal"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Une délégation de entrepreneurs Italiens rencontre le nouveau
                                                        Ministre du Commerce, de l’Industrie et de l’Artisanat du Senegal, M.me Mata Sy DIALLO. Giuseppe Gualchi – VP Rete Imprese Piemonte
                                                        M.me Mata Sy DIALLO – Ministre du Commerce, de l’Industrie et de ’Artisanat du Senegal, Andrea Giannetto – Membre du Bureau International de l’ADA et President de l’IDA Ousmane Ndiaye – Conseiller du President ADA</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>IDA Business Mission</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Andrea-Giannetto-Dirigente-Ucee-al-Parlamento-Europeo-Bruxelles-200x200260x270-260x270-260x270.jpg" alt="Andrea-Giannetto-Dirigente-Ucee-al-Parlamento-Europeo-Bruxelles" title="Andrea-Giannetto-Dirigente-Ucee-al-Parlamento-Europeo-Bruxelles"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Andrea Giannetto, IDA President, during a television interview in the European Parliament – Bruxelles</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>European Parliament</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/milano-forum-della-cooperazione-internazionale-200x200260x270-260x270-260x270.jpg" alt="milano-forum-della-cooperazione-internazionale" title="milano-forum-della-cooperazione-internazionale"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>The Minister for International Cooperation and Integration has announced the International Cooperation Forum to be held in Milan on 1 and 2 October This is a public meeting of a day and a half that will bring together concerned citizens, experts, young people, traditional and new players in co-operating for development with the highest Government Officials and Ministers from Europe and Countries of the South of the world.
                                                        <br>
                                                        IDA attendance./p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>International Cooperation Forum</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Bono_and_Jim_Kim_on_WhatwillitTake_1-200x182260x270-260x270-260x270.jpg" alt="Bono_and_Jim_Kim_on_WhatwillitTake_1" title="Bono_and_Jim_Kim_on_WhatwillitTake_1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Internationally known rock singer, activist and co – founder of ONE, Bono, visited the World Bank on November 14. He participated in a lively discussion with Bank President Jim Young Kim on ways to end world poverty, as part of the Bank’s “What Will It Take” global campaign.
                                                        <br>
                                                        IDA attendance.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Bono Vox and Jim Kim Discuss Ways to End Poverty</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/ISKAN-200x200260x270-260x270-260x270.jpg" alt="ISKAN" title="ISKAN"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>IDA team during the presentation of a Social Housing project in Mauritania and a contract signature between ISKAN (Société Nationale d’Aménagement des Terrains, de Développement de l’Habitat et de Promotion et Gestion Immobilière) and an italian construction group.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Social Housing project in Mauritania</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Photo-de-groupe-ENA-mars-2012-200x199260x270-260x270-260x270.jpg" alt="Photo-de-groupe-ENA-mars-2012" title="Photo-de-groupe-ENA-mars-2012"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>First Meeting among the Academies of the Diplomatic Institutions – March 2012 in Paris
                                                        <br>
                                                        Organized by Francophonie <br>
                                                        ADA attendance.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Meeting among Academic Institutions</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Andrea-Giannetto-Managing-Director-of-the-Union-of-European-Experts-Chambers-UCEE-200x200260x270-260x270-260x270.jpg" alt="Andrea-Giannetto-Managing-Director-of-the-Union-of-European-Experts-Chambers-UCEE" title="Andrea-Giannetto-Managing-Director-of-the-Union-of-European-Experts-Chambers-UCEE"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Alessandria (Italy) – Conference arranged by UCEE and IDA for the Food security. Andrea Giannetto do a speech regarding the Food Security in Africa.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Food security in the world</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Women-200x184260x270-260x270-260x270.jpg" alt="Women" title="Women"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>In celebration of the International Women’s Day on 8 March, the
                                                        UN Office for Partnerships and the Business Civic Leadership Center of the
                                                        U.S. Chamber of Commerce co-hosted the annual Women’s Forum at the UN Headquarters.
                                                        <br>
                                                        IDA attendance.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>The Role of Business in Empowering Women</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Default_en-WFD_logo-1-200x171260x270-260x270-260x270.png" alt="Default_en-WFD_logo-1" title="Default_en-WFD_logo-1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>The Conference of INGOs strengthened the civil society dimension of the World Forum for Democracy through the organisation of two events
                                                        Sunday 7 October : a one-day debate on the subject of inclusive democracy which looked at the subject from three angles: human rights, media, and women Wednesday 10 October: a Round table on “Civil society, a key player for living together”
                                                        <br>
                                                        IDA attendance
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h5>World Forum for Democracy: an active role for the Conference of INGOs</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Mario-Monti-al-Meeting-di-Rimini-200x155260x270-260x270-260x270.jpg" alt="Mario-Monti-al-Meeting-di-Rimini" title="Mario-Monti-al-Meeting-di-Rimini"></figure>
                                                <div class="overlay-box owl-video-frame h-75">
                                                    <p>Mario Monti, italian Prime Minister, during the Rimini Meeting.
                                                        <br>
                                                        IDA attendance
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Rimini Meeting</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Ancona2012_poster-200x200260x270-260x270-260x270.png" alt="Ancona2012_poster" title="Ancona2012_poster"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>“L’Africa in piedi. Ora non lasciamole sole”. International conference for the support to african women, done in Auditorium del Lazzaretto
                                                        <br>
                                                        Ancona (ITALY) from 5 to 7 october 2012.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h5>International conference “L’Africa in piedi. Ora non lasciamole sole”</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Talenti-200x200260x270-260x270-260x270.jpg" alt="Talenti" title="Talenti"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>SCHOOLS INTERNATIONAL TALENTS in Vinovo (Torino) – Italy <br>
                                                        Andrea Giannetto speech and IDA sponsorship of the event.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>SCHOOLS INTERNATIONAL TALENTS</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Italia-e-Africa260x270-260x270-260x270.jpg" alt="Italia-e-Africa" title="Italia-e-Africa"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>30 november, Monticello Brianza. “Italia e Africa, partner nel business” Speakers: Ambassador Umberto Vattani, former General Secretary of Foregner Ministery and ICE President, Gloria Targetti Simest, Giuseppe Tripoli SME representative, Dario Speranza VP Political and Institutional Scenarios and Analysis (Government Affairs Department) of Eni.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Italia e Africa, partner nel business</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2012/Yukmella1-200x200260x270-260x270-260x270.jpg" alt="Yukmella1" title="Yukmella1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>20 – 22 November 2012, the IDB Industrial Development Board of the UNIDO took place in Vienna VIC at his fortieth session were Director Mag. Dr. Dietmar Gert Lackner (ADA member) attended the meeting as Adviser of the Austrian Delegation to UNIDO headed by H.E. Ambassador Dr. Christina Stix-Hackl.
                                                        <br>
                                                        Director Mag. Dr. Dietmar Gert Lackner meet the UNIDO Director General Dr. Kandeh K. Yumkella
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>IDB Industrial Development Board of the UNIDO</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-6">
                                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/festa-dei-popoli-200x192260x270-260x270-260x270.jpg" alt="festa-dei-popoli" title="festa-dei-popoli"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Festa dei Popoli – Festival of Peoples. Milan – January the 6th, the Archbishop of Milan, Cardinal Angelo Scola, meet 12 young people from different countries and continents, Peru, Philippines, China, Togo, Romania and Ukraine. IDA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Festa dei Popoli</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/westafricanleaders-200x200260x270-260x270-260x270.jpg" alt="westafricanleaders" title="westafricanleaders"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>18 January 2013 – Sierra Leone’s President Ernest Bai Koroma, that is also the ADA Honorary President, attend in Abidjan an Emergency ECOWAS Heads of State and Government Summit on the crisis in Mali.
                                                        <br>
                                                        Photo By Cocorioko Newspaper
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>West African leaders meeting</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/WorldEconomic-Forum-200x200260x270-260x270-260x270.jpg" alt="WorldEconomic-Forum" title="WorldEconomic-Forum"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>The Global Development Outlook – Davos (Switzerland) 24 January 2013. With the Millennium Development Goals expiring in 2015, what should be at the top of the next development agenda? IDA attendance. Speakers:Bill Gates III – Co-Chair, Bill & Melinda Gates Foundation, USA David Cameron – Prime Minister of the United Kingdom Ban Ki-moon – Secretary-General, United Nations, New York Ngozi Okonjo-Iweala – Coordinating Minister for the Economy and Minister of Finance of Nigeria Paul Polman – Chief Executive Officer, Unilever, United Kingdom Helene D. Gayle – President and Chief Executive Officer, CARE USA Jasmine Whitbread – Columnist, Foreign Affairs, The New York Times, USA H.M. Queen Rania Al Abdullah of the Hashemite Kingdom of Jordan. Photo by www.weforum.org</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>World Economic Forum Annual Meeting 2013</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Sjiu-200x182260x270-260x270-260x270.jpg" alt="Sjiu" title="Sjiu"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>25 January – St. John International University (SJIU), an American University incorporated and ADA have signed a “PARTNERSHIP AGREEMENT IN THE ACADEMIC AND INFORMATION/TECHNOLOGICAL SCIENCES ENVIRONMENT FOR RESEARCH, INFORMATION AND EDUCATIONAL ACTIVITIES”.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h5>St. John International University and ADA agreement</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/resource/feature-4.jpg" alt=""></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>E“20 years united market: opportunity to go out of the crisis”
                                                        Speakers: Antonio Tajani, Vice President of the European Commission, responsible for Industry and Entrepreneurship Franco Anelli, Magnifico Rettore dell’Università Cattolica del Sacro Cuore Guido Merzoni, Preside della Facoltà di Scienze politiche e sociali Alberto Quadrio Curzio, professore Emerito di Economia politica, Università Cattolica del Sacro Cuore. IDA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h6>Forum by European Commission and University Cattolica del Sacro Cuore
                                                            Milan, 4 February 2013</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Project-presentation-Mauritania-200x200260x270-260x270-260x270.jpg" alt="Project-presentation-Mauritania" title="Project-presentation-Mauritania"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Nouakchott, 12 February 2013 – Andrea Giannetto during an Housing project presentation in Mauritania.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Housing in Mauritania</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/china-Koroma-200x200260x270-260x270-260x270.jpg" alt="china-Koroma" title="china-Koroma"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Freetown, 20 February – High-level Chinese delegation heads for Sierra Leone to attend President Koroma’s inauguration. As preparations are ongoing for the inauguration ceremony of President Dr.Ernest Bai Koroma following his reelection in November, 2012, a Chinese Government delegation of seven, headed by Mr. Jiang Weixin as Special Envoy of President Hu Jintao of the People’s Republic of China is expected to arrive in Sierra Leone on the 21st of February.Mr. Jiang Weixin is Minister of Housing and Urban-Rural Construction, of the People’s Republic of China. Photo By Cocorioko Newspaper</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>President Koroma’s inauguration</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/CNA-Siracusa-200x200260x270-260x270-260x270.jpg" alt="CNA-Siracusa" title="CNA-Siracusa"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Siracusa, 21 February 2013 – IDA presentation in Siracusa CNA. Andrea Giannetto introduce some African opportunities to an SME meeting in Siracusa. The projects introduced are in construction and agriculture.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>African Opportunities presentation in CNA Siracusa</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Alpha-Xerri1-200x200260x270-260x270-260x270.jpg" alt="Alpha-Xerri1" title="Alpha-Xerri1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Paris, 1 March 2013 – UNESCO meeting in Paris, Francois Xerri meet Alhaji Alpha Kanu the Sierra Leone Minister of Information and Communication; they have also discussed regarding a Telecommunication projet.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>UNESCO meeting in Paris</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/ebkobamaObama-260x270.jpg" alt="ebkobamaObama" title="ebkobamaObama"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Thursday March 28, during a meeting at the United States White House. Sierra Leone’s President Ernest Bai Koroma , along with three other African leaders, today met with U.S. President Barak Obama at the White House in Washington DC. President Koroma and the four African Heads of State–President Macky Sall of Senegal, President Joyce Banda of Malawi, and Prime Minister José Maria Pereira Neves of Cape Verde–were invited to the White House by President Obama, to “discuss strengthening democratic institutions across sub-Saharan Africa, and building on Africa’s democratic progress to generate increased economic opportunities and expanded trade and investment”, according to a statement from the White House Press Secretary. PHOTO by DR.SYLVIA BLYDEN</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>U.S. Leader Obama showers praises on President Koroma</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Khady-200x200260x270-260x270-260x270.jpg" alt="Khady" title="Khady"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Nouackchott, April the 8th, nomination of the IDA coordinator in Mauritania Mrs. Khadijetou mint cheikh Saadbouh.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>IDA Mauritania coordinator nomination</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Habitat-200x200260x270-260x270-260x270.jpg" alt="Habitat" title="Habitat"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Nouakchott, April the 29th. During an economic mission in Mauritania, IDA team meet the General Manager of the Housing Ministery Mr. Abdel Ghader O. Mohamed to discuss regarding several construction projects in the Country.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Meeting with the GM of Housing Mauritania Ministery</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/La-Francophonie-logo-200x158260x270-260x270-260x270.jpg" alt="La-Francophonie-logo" title="La-Francophonie-logo"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>2 May, Dakar – La Francophonie and ADA do a PARTNERSHIP for better develop the Franch area of Africa.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Partnership with “la francophonie”</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/SENEGAL-Sierra-Leone-Ambassy-200x200260x270-260x270-260x270.jpg" alt="SENEGAL-Sierra-Leone-Ambassy" title="SENEGAL-Sierra-Leone-Ambassy"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>In commemoration of the 52nd Independence anniversary of Sierra Leone on April 27th 2013, H.E Ambassador Khadijatu Bassir hosted a dinner at the official residence. The event was graced by members of the Sierra Leone Nationals Union, Sierra Leone experts serving in various internal organizations in Senegal, Senegalese who have served in Sierra Leone as well as friends of Sierra Leone. ADA attendance. Photo By Cocorioko Newspaper</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h5>Sierra Leone Embassy in Senegal celebrates Independence Day</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/NovaP-event-200x200260x270-260x270-260x270.jpg" alt="NovaP-event" title="NovaP-event"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>15 May, Vinovo (Italy) – The meeting of 15 May, to be followed by a second round on 19 June presents the development context and “sustainable” opportunity for Italian companies in Africa. The event has been organized by Nova Pangea (association for the internationalization), ADACI (buyer association), IDA and St. John International University (SJIU).</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Concrete business opportunities in Africa</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/NP19-june-200x200260x270-260x270-260x270.jpg" alt="NP19-june" title="NP19-june"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>19 June, Vinovo (Italy) – Experiences, proposals and projects for the internationalization of Italian firms in Africa will be illustrated and discussed on the occasion of this conference organized by SJIU in collaboration with the associations Nova Pangea and Adaci. On 15th May the conference addressed the theme of the African context and its peculiarities, culture and opportunities of development. This second meeting on Africa will involve either entrepreneurs who are already working in Africa and those who are planning to expand their activities in those countries, taking into account the concept of sustainability. Andrea Giannetto speech.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Africa, polyedric continent</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/ZF1-200x200260x270-260x270-260x270.jpg" alt="ZF1" title="ZF1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>24 June, Officially inaugurated the Free Zone in Nouadhibou (Mauritania). Mauritanian President Mohamed Ould Abdel Aziz and Ismaël Ould Bodda Ould Cheikh Sidiya Free Zone President have inaugurated the Free Zone in Nouadhibou; will be created within this zone, development zones allocated to the creation of activities of an industrial, commercial, sea ports and airports services and support infrastructures (such as housing, tourism, retail, leisure and offices). IDA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Free Zone in Nouadhibou</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Obama-Senegal-200x200260x270-260x270-260x270.jpg" alt="Obama-Senegal" title="Obama-Senegal"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Dakar, June 26 President Barack Obama arrives in Africa for a three-nation tour. Obama visit Senegal, South Africa and Tanzania. He will use the opportunity to strengthen ties and promote issues of mutual interests. In his speeches and meetings, Obama will spell out his priorities and emphasize what is important and central to American interest in the region.
                                                        <br>
                                                        ADA attendance in Dakar.
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Obama visit Senegal</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/ViennaUNIDO-200x200260x270-260x270-260x270.jpg" alt="ViennaUNIDO" title="ViennaUNIDO"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Vienna, 24-27 June 2013 – Forty-first session of UNIDO Industrial Development Board The Industrial Development Board of the United Nations Industrial Development Organization held its forty-first session in Vienna International Centre, chaired by the new President, H.E. Ambassador Mr. Antonio GARCIA-REVILLA of Peru, from 24-27 June 2013 where Director at the Federal Ministry of Economic, Family and Youth of the Republic of Austria Mag. Dr. Dietmar Gert LACKNER, MBA MPA (ADA`s representative in Austria) attended the meeting as Adviser of the Austrian Delegation to UNIDO headed by H.E. Ambassador Dr. Christine STIX-HACKL. During that meeting H.E. LI Yong of China, was elected to the post of new Director General of the Industrial Development Board of the UNIDO. The outgoing Director General H.E. Dr. Kandeh K. YUMKELLA addressed in his opening statement to Member States the wish that at the outset of the General Conference in December 2013, which will be held in LIMA (Peru) will give Member States their own priorities for the Organization by agreeing an exciting proposal as a new LIMA DECLARATION. By ending his statement, H.E. Director General Dr. Kandeh K. YUMKELLA said: “Taken together with the integration of industry into the post-2015 development agenda and increased multi-stakeholder partnerships, this will serve to secure UNIDO`s future.” Director Mag. Dr. Dietmar Gert LACKNER, MBA MPA met the outgoing Director General H.E. Dr. Kandeh K. YUMKELLA and members of the Secreatariat of UNIDO and H.E. Ambassador of China H.E. Jingye CHENG, at the Panel discussion at the Permanent Mission of Hungary on 18 June 2013</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>UNIDO Industrial Development Board</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Unido1-200x200260x270-260x270-260x270.jpg" alt="Unido1" title="Unido1"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Director Mag. Dr. Dietmar Gert LACKNER, MBA MPA met the new UNIDO Director General H.E. LI Yong, at a special invitation for participants of the Board of UNIDO given by H.E. Ambassador Balázs CSUDAY of Hungary at the Permanent Mission of Hungary to the United Nations Office and Other International Organizations in Vienna, Bankgasse 4-6, 1010 Vienna, on 25 June 2013.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>UNIDO Industrial Development Board</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/UNIDO2-200x200260x270-260x270-260x270.jpg" alt="UNIDO2" title="UNIDO2"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Director Mag. Dr. Dietmar Gert LACKNER, MBA MPA had talks at the same meeting personal vision as professor for possible educational and university programs which he could suggest for MBA and BA maybe under the umbrella of A.D.A. for African Countries re-examined by ISGE in Paris with H.E. Jean-Claude BROU KASSI, Minister of Industry of the Republic of Côte d`Ivoire.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>UNIDO Industrial Development Board</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/UNIDO3-200x200260x270-260x270-260x270.jpg" alt="UNIDO3" title="UNIDO3"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>At that special reception of Board Members at the Hungarian Embassy, Director Mag. Dr. Dietmar Gert LACKNER, MBA MPA, GCMSOBM/WEC, KLJ-J had also talks as Chevalier and Knight of Justice and Special Envoy and Special Adviser of the 50th Grand Master H.E. Jan Count Dobrzenský z Dobrzenicz ojensky spitalni wheel svateho Lazara Jeruzalemskeho Bohemia, Czech Republic with H.E. Ambassador of SMOM Max Turnauer, carrier of the Golden Flees about possible framework in the future.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>UNIDO Industrial Development Board</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/angola-200x200260x270-260x270-260x270.jpg" alt="angola" title="angola"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Luanda, 16 July 2013 – Social Housing project in Angola. Andrea Giannetto meet the General of the Angola Army José Tsiba and the Administrator of Angodis LDA Pedro Goncalves, for a project regardind 50.000 social houses in Angola.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Social Housing in Angola</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/Somalia-200x200260x270-260x270-260x270.jpg" alt="Somalia" title="Somalia"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Milan, 11 September – Andrea Giannetto meet ALI HASHI DORRE, Candidate for President, Somalia 2012. The meeting was to discuss regarding the Somalia social and economic development. A concrete suggestion is to combine several personalities, who, while being members of separate groups, can make available their moral and intellectual abilities in the interest of Somalia, able to work autonomously.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Meeting for Somalia</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/PRESIDENTKOROMAWITHARABS-200x200260x270-260x270-260x270.jpg" alt="PRESIDENTKOROMAWITHARABS" title="PRESIDENTKOROMAWITHARABS"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Kuwait, 20 November – President Ernest Bai Koroma has stepped out of the nation once again in his never-ending search for golden opportunities to strategically position Sierra Leone for the socio-economic and political development encapsulated in his Agenda For Prosperity.
                                                        Photo By Cocorioko Newspaper</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>President Koroma in Kuwait</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2013/mandela_factbox-200x102260x270-260x270-260x270.jpg" alt="mandela_factbox" title="mandela_factbox"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Johannesburg, 5 December – South Africa’s first black president and anti-apartheid icon Nelson Mandela has died at the age of 95.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Nelson Mandela has died</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box">
                                                    <img src="assets/images/news/history/ADA_2013/Saint-Lazarus-120x120260x270-260x270-260x270.jpg" class="w-50 h-50" alt="Saint-Lazarus" title="Saint-Lazarus">
                                                    <img src="assets/images/news/history/ADA_2013/Saint-Lazarus-Prag2013-120x120260x270-260x270-260x270.jpg" class="w-50 h-50" alt="Saint-Lazarus-Prag2013" title="Saint-Lazarus-Prag2013">
                                                </figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Prague, December 2013 – Celebration of Saint Lazarus of Jerusalem in Prague, with Director Mag. Dr. Dietmar Gert LACKNER and Grand Master Jan comes Dobrzensky z Dobrzenicz. On the pictures are also be seen the Nuntius in Prague, members of teutonic order and also a Grand Master of St. John of Jerusalem.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Celebration of Saint Lazarus of Jerusalem in Prague</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-7">
                                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/PMCosta_4u2voxs0-200x197260x270-260x270-260x270.jpg" alt="PMCosta_4u2voxs0" title="PMCosta_4u2voxs0"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Abidjan, 19 February – IDA President Andrea Giannetto with the Ivory Coast Prime Minister Daniel Kablan Duncan during the African Water Association (AfWA) International Congress and Exhibition in Abidjan.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>African Water Association</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/UCEENEWS-January-22-2014-PRESS-CONFERENCE-AT-THE-EUROPEAN-PARLIAMENT-BRUSSELS_0ox8aq2v-200x200260x270-260x270-260x270.jpg" alt="UCEENEWS-January-22-2014-PRESS-CONFERENCE-AT-THE-EUROPEAN-PARLIAMENT-BRUSSELS_0ox8aq2v" title="UCEENEWS-January-22-2014-PRESS-CONFERENCE-AT-THE-EUROPEAN-PARLIAMENT-BRUSSELS_0ox8aq2v"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Brussels, January 22 – Mission of senior members of the Gulf countries (Gulf Cooperation Countries, GCC) for a series of meetings with politicians and European entrepreneurs, which will illustrate the possibilities with these economic exchange countries. UCEE President Paolo Saba and Sheikh Adel Al Jassar will submit a proposal in particular: the creation of a European Institute, headquartered in Brussels, to update the countries of the Middle East and the African Union on the fight against the crime of forgery.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>The fight against the crime of forgery</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/NP-evento-acqua-200x200260x270-260x270-260x270.jpg" alt="NP-evento-acqua" title="NP-evento-acqua"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Vinovo, January 22- Water conference arranged by Novapangea and The St. John International University. In the water projects IDA support, is for Project Preparation, Water Governance and Water Knowledge, find the best products and technologies, supporting projects designed to increase water, energy and food security, enhance regional cooperation and promote socio-economic growth in Africa.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Water finite resource</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/IDA-Club-nomination-200x200260x270-260x270-260x270.jpg" alt="IDA-Club-nomination" title="IDA-Club-nomination"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Abidjan, 17 February – Andrea Giannetto with the Honorable Kouassi Bodi Théodore during the establishment of the “IDA Club Cote d’Ivoire”. The Honorable Kouassi Bodi Théodore is the President of “IDA Club Cote d’Ivoire”.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>IDA Club Cote d’Ivoire</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/AFWA_8vmj70db-200x200260x270-260x270-260x270.jpg" alt="AFWA_8vmj70db" title="AFWA_8vmj70db"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Abidjan, 17 February – The African Water Association (AfWA) International Congress and Exhibition is a biennial scientific and technical forum to assess status, recent advances, and experiences in water, sanitation and environment sector in Africa. The 17th AfWA International Congress and Exhibition was hold in Abidjan from 17 to 20 February 2014 under the theme: “ MOBILIZING RESOURCES AND GOVERNANCE OF WATER AND SANITATION IN AFRICA”. IDA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>African Water Association (AfWA) International Congress</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Ernest1_8vmj70db-200x200260x270-260x270-260x270.jpg" alt="Ernest1_8vmj70db" title="Ernest1_8vmj70db"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Freetown, 25 February – Sierra Leone’s President, His Excellency, Dr. Ernest Bai Koroma is confirmed to receive the African President of the year 2013 Award and participate as Special Guest of Honour during the 6th International Summit on African Leadership slated to hold on February 27, 2014 at The St Regis, Washington D.C, U.S.A, in an event organized by the African Leadership magazine. By Cocoriko</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>African President of the year 2013</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Yanoukovich-200x200260x270-260x270-260x270.jpg" alt="Yanoukovich" title="Yanoukovich"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Gabriel Kotchofa Benin Ambassador in Moscow and ADA Representative in Russia, meet the President of Ukraine Victor Yanoukovich.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Meeting in Ukraina</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Arzebajan-200x200260x270-260x270-260x270.jpg" alt="Arzebajan-" title="Arzebajan-"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Gabriel Kotchofa Benin Ambassador in Moscow and ADA Representative in Russia, meet the President of Azerbaijan, Ilham Aliyev.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Azerbaijan</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Banki-Koroma_26xs04l5-200x200260x270-260x270-260x270.jpg" alt="Banki-Koroma_26xs04l5" title="Banki-Koroma_26xs04l5"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Freetown, 5 March. His Excellency President Koroma receive the Secretary-General of the United Nations Ban Ki-moon in Sierra Leone. “The completion of the UN Integrated Peacebuilding Office, UNIPSIL, marks the end of more than 15 years of successive peace and political operations that all played critical roles in supporting Sierra Leone’s remarkable transition from war to peace,”</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Ban Ki-moon in Sierra Leone</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Armenia-200x190260x270-260x270-260x270.jpg" alt="Armenia" title="Armenia"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Gabriel Kotchofa Benin Ambassador in Moscow and ADA Representative in Russia, meet the President of Armenia, Serzh Sargsyan.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Armenia</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/SENATEUR-TSHIMBOMBO-ET-Mr-Donaly-MALUNGU_-200x199260x270-260x270-260x270.jpg" alt="SENATEUR-TSHIMBOMBO-ET-Mr-Donaly-MALUNGU" title="SENATEUR-TSHIMBOMBO-ET-Mr-Donaly-MALUNGU"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Brussels, March 2014 – <br>
                                                        Malungu Donaly ADA Representative with Mr. TSHIMBOMBO Senator and Former Minister of the DEMOCRATIC REPUBLIC OF CONGO , during an official meeting in Brussels.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>DEMOCRATIC REPUBLIC OF CONGO meeting</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Turkey_ispat_rome-200x200260x270-260x270-260x270.jpg" alt="Turkey_ispat_rome" title="Turkey_ispat_rome"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Rome, 13 March – ISPAT calls on Italian companies to invest in Turkey In a seminar in Italy’s capital Rome organized in collaboration with the Italian Employers Federation (Confindustria), the Investment Support and Promotion Agency of Turkey (ISPAT) has invited Italian companies to invest in Turkey’s growing economy. Focusing on infrastructure, renewable energy and healthcare sectors, the seminar brought together 50 Italian companies and ISPAT staff to confer on the investment opportunities in Turkey as well as the incentives provided for investors in the country. IDA attendance</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Invest in Turkey</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Putin-200x200260x270-260x270-260x270.jpg" alt="Putin" title="Putin"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Gabriel Kotchofa Benin Ambassador in Moscow and ADA Representative in Russia, meet the President of Russia, Vladimir Putin.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Meeting with Vladimir Putin</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Angola-Ministro-finanze-200x200260x270-260x270-260x270.jpg" alt="Angola-Ministro-finanze" title="Angola-Ministro-finanze"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Turin April 8 – The event was an opportunity to learn about the opportunities for cooperation that the country has to offer and explore the potential for developing their business in a market that is still relatively unexplored. The initiative was organized by: Ambasciata dell’Angola, l’Unione Industriale di Torino e Assafrica, la Città di Torino, Ministeri Affari Esteri e Sviluppo Economico, da Ceipiemonte, Regione Piemonte, Unioncamere Piemonte e delle Camere di Commercio del Piemonte.Andrea Giannetto meet the Angola Finance Minister Abrahão Gourgel to discuss regarding an housing project in Angola.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Angola Italy B2B event</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Calenda-200x198260x270-260x270-260x270.jpg" alt="Calenda" title="Calenda"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>During the Angola Italy B2B event, Andrea Giannetto meet the italian vice Minister Carlo Calenda to discuss regarding an housing project in Angola.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Angola Italy B2B event</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Qatar-water-200x167260x270-260x270-260x270.jpg" alt="Qatar-water" title="Qatar-water"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>3rd Edition Power & Desalination Summit’ in Doha, Qatar on 12 – 13 May 2014. The summit will serve as a unique platform for the convergence of key players and decision makers from around the world to discuss and debate the regional challenges in a competitive landscape. The main topics discussed are the desalination technologies affecting cost and demand and Future projects in the Power and Desalination sector in the GCC. Andrea Giannetto attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Power & Desalination Summit</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Noble-International-University-200x60260x270-260x270-260x270.jpg" alt="Noble-International-University" title="Noble-International-University"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Toronto, 14 May – The Noble University Board of Trustees is confirming that Mr. Andrea Giannetto is receiving the University’s highest honor. Mr. Giannetto is receiving the Honorary Doctorate Degree on International Relations. The Honorary Degree recipient reflect deep commitments to services and the University is proud to recognize their achievements and the dedication to their communities.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Andrea Giannetto Honorary Doctorate Degree</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Andrea-Giannetto-Novapangea-Piemonte__-200x197260x270-260x270-260x270.jpg" alt="Andrea-Giannetto-Novapangea-Piemonte" title="Andrea-Giannetto-Novapangea-Piemonte"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Vinovo, 21 May – The most significant phenomenon that we see today , is made from the concrete interests of small and medium enterprises to new markets , but the renewed confidence in travel abroad is already creating its first victims, especially among those who are less prepared , because you want to reach a foreign market by necessity and not by culture. Andrea Giannetto explained how to deal with ECOWAS Countries.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Piedmont and the challenge of internationalization</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Koroma-Saudi-200x198260x270-260x270-260x270.jpg" alt="Koroma-Saudi" title="Koroma-Saudi"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Jeddah, 3 June – In a remarkable display of unity and true nationalism, Sierra Leone nationals in Saudi Arabia’s second largest city of Jeddah warmly welcomed His Excellency, President Dr. Ernest Bai Koroma’s new envoy to the Kingdom of Saudi Arabia, Alhaji Mohamed Sillah Kargbo at the Chinese Great Wall Hall over the weekend.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>President Koroma in Saudi Arabia</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Dakar-Infrastructure-200x85260x270-260x270-260x270.png" alt="Dakar-Infrastructure"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Dakar – 14/15 June “Leveraging Public-Private Partnerships for continental infrastructure transformation”. Convened by President Macky Sall of the Republic of Senegal and Chairperson of the NEPAD Heads of State and Government Orientation Committee (HSGOC), The Dakar Financing Summit (DFS) for Africa’s Infrastructure is a crucial effort to engage the private sector to support investment and implementation of major regional infrastructure projects. The Program for Infrastructure Development in Africa (PIDA) forms the basis for the DFS and it aims to make available modern infrastructure for an interconnected and more competitive continent. ADA attendance.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Dakar Financing Summit</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Donaly-et-le-Deputu00E9-Allemand-Volkmar-Klein-CDU-_-200x198260x270-260x270-260x270.jpg" alt="Donaly-et-le-Deputu00E9-Allemand-Volkmar-Klein-CDU" title="Donaly-et-le-Deputu00E9-Allemand-Volkmar-Klein-CDU"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Berlin June 2014 – <br>
                                                        Malungu Donaly ADA Representative with the German honorable MP VOLKMAR KLEIN of CDU in June 2014, during a courtesy visit at the residence of Mr. Malungu.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Meeting in German</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Yali-NGom-200x198260x270-260x270-260x270.jpg" alt="Yali-NGom" title="Yali-NGom"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>New York, 16 June – The Obama Administration’s Young African Leaders Initiative (YALI) is a long-term effort to invest in the next generation of African leaders and strengthen partnerships between the United States and Africa. This wide-ranging effort has been led by the White House and the U.S. Department of State in partnership with the U.S. Agency for International Development (USAID) and the Peace Corps. The next phase of YALI will develop a prestigious network of leaders across critical sectors, cement stronger ties to the United States, and offer follow-on leadership opportunities in Africa, with the goal of strengthening democratic institutions and spurring economic growth. Sobel NGom is the Leader of ADA Program Contest Young Elite Francophone JEF, is one of the young african people coming from 15 african countries invited by YALI.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Young African Leaders Initiative (YALI)</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/THIERRY-ET-MINISTRE-TCHADIEN-ENERGIE_-200x200260x270-260x270-260x270.jpg" alt="THIERRY-ET-MINISTRE-TCHADIEN-ENERGIE" title="THIERRY-ET-MINISTRE-TCHADIEN-ENERGIE"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Paris, 19 June, Thierry VEAL the ADA General Delegate for Asia with the Chadian Minister of Energy and Petroleum : DJARASSEM THE BEMADJEL; He signed the agreement to develop the Kinetic Program in Chad for 25 Mw.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Kinetic Program in Chad</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/UAE-Sierra-Leone-200x188260x270-260x270-260x270.jpg" alt="UAE-Sierra-Leone" title="UAE-Sierra-Leone"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Jeddah, 1 July – Sierra Leone’s Minister of Finance and Economic Development has said that that his country has won the first call for proposals for the prestigious International Renewable Energy Agency / Abu Dhabi Fund for Development (IRENA / ADFD) financing facility. Dr. Kaifala Marrah made the disclosure at the Jeddah Hilton Hotel in Saudi Arabia and said: “…Pursuant to actualizing the vision of H.E. President Dr Ernest Bai Koroma, we wish on behalf of the Government of Sierra Leone to thank Mr. Siray Timbo, Special Envoy of H.E. The President and Ambassador to the UAE; the Ministry of Energy and Mr. Filip Matwin, General Manager of Advanced Science and Innovation Company (ASIC) LLC / OGI, for coordinating and putting together the winning bid”. By Cocorico</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Renewable Energy Project in Sierra Leone</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Andrea-Giannetto-CdO-200x167260x270-260x270-260x270.jpg" alt="Andrea-Giannetto-CdO" title="Andrea-Giannetto-CdO"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Torino 10 July – Expandere is an initiative which takes place Thursday at the Palavela in Turin, Piedmont promoted by “Compagnia delle Opere” to support enterprises in their path of change and growth. Andrea Giannetto – IDA President with Alessandra Campia – Nova Pangea President, have introduced the opportunities in Africa. 250 companies , sole proprietorships , cooperatives , professionals engaged in various sectors of the economy and services, by agribusiness food industry , from healthcare to construction, from culture to non-profit organizations that develop among them several hundred appointments.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Expandere Torino</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Andrea-Giannetto-UNACOIS-200x200260x270-260x270-260x270.jpg" alt="Andrea-Giannetto-UNACOIS" title="Andrea-Giannetto-UNACOIS"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Dakar, 15 July – IDA management, with Italian entrepreneurs meet the UNACOIS top managers to set up several Joint Venture between Senegalese and Italian companies in any field, mainly in handicraft, agriculture and commerce.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Economic Mission in Senegal</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Training-Senegal-200x200260x270-260x270-260x270.jpg" alt="Training-Senegal" title="Training-Senegal"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Dakar, 16 July – IDA management, with Italian entrepreneurs meet the Senegalese Training Minister to discuss regarding a traininig program for Young and Gender ecomic and social development. The training and Know-How transfer is in any field, mainly in handicraft, agriculture and commerce.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Handicraft Training Minister meeting in Senegal</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Renzi-Angola-200x200260x270-260x270-260x270.jpg" alt="Renzi-Angola" title="Renzi-Angola"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Luanda, 21 July – The Italian Prime Minister, Matteo Renzi, noted Italy’s willingness to work with the Angolan state in the energy sector, involving oil companies ENI and Sonangol. Renzi also said that this year Italy’s deputy Economic Development Minister Carlo Callenda would visit Angola in the company of Italian business people to analyse opportunities to boost cooperation in a number of sectors.
                                                        <br>
                                                        ADA attendance. <br>
                                                        Matteo Renzi in missione in Africa (Foto: Ansa-Ufficio Stampa Palazzo Chigi, Tiberio Barchielli – Filippo Attili)
                                                    </p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Italian Prime Minister in Angola</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/ECOWAS-LOGO_954ing08-200x200260x270-260x270-260x270.png" alt="ECOWAS-LOGO_954ing08" title="ECOWAS-LOGO_954ing08"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Abuja – August 15, the ADA President Dr. Benoit Ngom and the President of the ECOWAS Commission Dr. KADRE Désiré OUEDRAOGO , have signed a collaboration agreement. With this agreement, ADA and ECOWAS have decided to implement a series of projects and programs aimed to improve economic and social conditions of the people of the Region and in particular the involvement of women and vulnerable groups . ADA and ECOWAS have agreed to a five-year action plan, that provides a program for the implementation of various projects , with a significant social and economic impact. The main fields of application are: Education and Training, Youth and Women, The Health Care, The Environment and Climate Change, The Economic Development, The Good Governance, Peace and Security.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>ADA – ECOWAS</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Andrea-Giannetto-NGom-200x200260x270-260x270-260x270.jpg" alt="Andrea-Giannetto-NGom" title="Andrea-Giannetto-NGom"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Abuja, 14 September – Benoit NGom ADA President, Andrea Giannetto IDA President and Dario Petrone Young ADA Representative, during a Diplomatic mission in Nigeria.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Diplomatic mission in Nigeria</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/ECOWAS-meeting-200x200260x270-260x270-260x270.jpg" alt="ECOWAS-meeting" title="ECOWAS-meeting"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Abuja, 15 September – The 10th ECOWAS – Development Partners Annual Coordination Meeting. The economic communities of West African states ECOWAS, is developing a long term development plan to fight against extreme poverty, insecurity and at the same time consolidate democratic ideals among member nations. President of the ECOWAS commission Kadre Desire Quedraogo made the declaration at the opening of the 10th edition of the ECOWAS development partner’s annual coordination meeting holding in Abuja. The commission’s president used the opportunity to commend the support of all partners in attaining the ECOWAS vision 2020. This edition provided participants the opportunity to understand some of the commission challenges, to strengthen political dialogue on the ECOWAS vision and anticipate prospects for support on the commission’s priority areas of intervention. ADA is a strategic partner of ECOWAS.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h5>The 10th ECOWAS – Development Partners Annual Coordination Meeting</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Sow-Andrea-Giannetto-200x200260x270-260x270-260x270.jpg" alt="Sow-Andrea-Giannetto" title="Sow-Andrea-Giannetto"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Abuja, 17 September – Benoit NGom and Andrea Giannetto meets in Abuja the ECOWAS Commissioner for Social Affairs and Gender, Dr. Fatimata Dia Sow. They have discussed about the situation of trade in the region, its evolution, changes and impact, as well as the trade policies of each country and the way the policies affect the behavior of men and women. Some social projects, have been introduced by IDA management to the Commissioner.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>ECOWAS Commissioner for Social Affairs and Gender</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Michaelle-Jean-200x191260x270-260x270-260x270.jpg" alt="Michaelle-Jean" title="Michaelle-Jean"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Dakar, 30 november – Michaëlle Jean, who has named the first woman leader of la Francophonie, has a mandate as Secretary General of the International Organization of La Francophonie, says its members must work closely together to ensure prosperity and stability. While the organization has concentrated largely on cultural issues over the years, Jean Michaëlle signaled that more emphasis will be put on economic matters. “One of the most ambitious and daring objectives that la Francophonie has ever set for itself is the idea of an economic Francophonie,” she told a news conference after being named by consensus at a summit of its members in Dakar, Senegal. “We need to work together, unite our efforts, especially as countries want growth, prosperity and development, knowing for example that a crisis in Mali is not (just) a Malian crisis.” She said a sharply focused economic strategy could provide “new relevance for la Francophonie”. “Countries, peoples and civilizations came together by doing business together, by exchanging economically together”. In the photo Michaëlle Jean, with François Hollande French President, Macky Sall Senegal President, Abdou Diouf former Secretary General of the International Organization of La Francophonie . ADA attendance. Photo: Sean Kilpatrick La Presse canadienne</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>Leader of la Francophonie, Michaëlle Jean</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box mb-70">
                                                <figure class="image-box"><img src="assets/images/news/history/ADA_2014/Monsieur-Donaly-et-Monsieur-Serge-Grageck-de-la-chambre-du-commerce-u00E0-Madrid_-200x200260x270-260x270-260x270.jpg" alt="Monsieur-Donaly-et-Monsieur-Serge-Grageck-de-la-chambre-du-commerce-u00E0-Madrid" title="Monsieur-Donaly-et-Monsieur-Serge-Grageck-de-la-chambre-du-commerce-u00E0-Madrid"></figure>
                                                <div class="overlay-box overflow-auto h-75">
                                                    <p>Madrid, 15 December 2014, Malungu Donaly ADA Representative with Mr. SERGE GRAGECK of the Spanish Commerce Chamber in Madrid, during the meeting between African and Spanish business men in December 2014.</p>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="inner">
                                                        <h4>African and Spanish business men</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->
@endsection
