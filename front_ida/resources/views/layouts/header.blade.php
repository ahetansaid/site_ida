<!-- Preloader -->
<div class="loader-wrap">
    <div class="preloader style-five">
        <div class="preloader-close">Preloader Close</div>
    </div>
    <div class="layer layer-one"><span class="overlay"></span></div>
    <div class="layer layer-two"><span class="overlay"></span></div>
    <div class="layer layer-three"><span class="overlay"></span></div>
</div>

<!-- CSS personnalisé pour l'alignement du header -->
<style>
.main-header {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    z-index: 99999 !important;
    background: white !important;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1) !important;
}

.main-header .header-lower {
    background: white !important;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
    position: relative !important;
    z-index: 99999 !important;
}

.main-header .header-lower .outer-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 0;
    min-height: 80px;
}

.main-header .logo-box {
    display: flex;
    align-items: center;
}

.main-header .logo-box .logo {
    margin: 0;
    display: flex;
    align-items: center;
}

.main-header .logo-box .logo img {
    max-height: 80px;
    width: auto;
    object-fit: contain;
}

.main-header .menu-area {
    display: flex;
    align-items: center;
}

.main-header .navigation {
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
    list-style: none;
}

.main-header .navigation > li {
    display: flex;
    align-items: center;
    margin: 0 15px;
}

.main-header .navigation > li > a {
    display: flex;
    align-items: center;
    padding: 10px 0;
    color: #333;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s ease;
}

.main-header .navigation > li.current > a,
.main-header .navigation > li:hover > a {
    color: #ff6b35;
}

/* Responsive */
@media (max-width: 991px) {
    .main-header .header-lower .outer-box {
        flex-direction: column;
        text-align: center;
    }
    
    .main-header .logo-box {
        margin-bottom: 15px;
    }
    
    .main-header .menu-area {
        width: 100%;
        justify-content: center;
    }
}

/* S'assurer que le header reste toujours visible */
.main-header {
    will-change: transform;
    transform: translateZ(0);
    -webkit-transform: translateZ(0);
}

/* Menu mobile fixe */
.mobile-menu {
    z-index: 99998 !important;
}

/* Widget de langue fixe */
.gtranslate_wrapper {
    z-index: 99999 !important;
    position: fixed !important;
    top: 30px !important;
    right: 20px !important;
}

/* Widget Google Translate */
#google_translate_element {
    z-index: 99999 !important;
    position: fixed !important;
    top: 30px !important;
    right: 20px !important;
}

/* Style pour le sélecteur de langue */
.goog-te-combo {
    background: white !important;
    border: 1px solid #ddd !important;
    border-radius: 4px !important;
    padding: 5px !important;
    font-size: 12px !important;
}
</style>

<!-- Language Switcher (gTranslate) - Position fixe hors du menu -->
<div class="gtranslate_wrapper" style="position: fixed; top: 30px; right: 20px; z-index: 99999;"></div>

<!-- Widget Google Translate alternatif -->
<div id="google_translate_element" style="position: fixed; top: 30px; right: 20px; z-index: 99999;"></div>

<!-- page-direction
<div class="page_direction">
    <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
    <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
</div>-->



<!-- search-popup -->

<!-- search-popup end -->


<!-- main header -->
<header class="main-header style-five">
    <!-- <div class="header-top">
            <div class="auto-container">
                <div class="top-inner clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index"><img src="assets/images/logo-5.png" alt=""></a></figure>
                    </div>
                     <div class="info-box pull-right">
                        <ul class="info-list clearfix">
                            <li>
                                <i class="flaticon-smartphone"></i>
                                <p>Call Our Support<br /><a href="tel:01005200369">0100 5200 369</a></p>
                            </li>
                            <li>
                                <i class="flaticon-compass"></i>
                                <p>838 Andy Street, Madison, <br />New Jersy 08003</p>
                            </li>
                            <li>
                                <i class="flaticon-clock"></i>
                                <p>Our Working Hours <br />Mon - Sat: 8 am - 6 pm</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <!-- Logo Box -->
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="/"><img height="80px" width="80px" src="assets/images/logoida/logo_ida_traditionel_avec_texte.png" alt="IDA International"></a></figure>
                </div>
                
                <!-- Menu Area -->
                <div class="menu-area pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="/">Accueil</a></li>
                                <li class="{{ request()->is('about-us') ? 'current' : '' }}"><a href="/about-us">À propos</a></li>
                                <li class="{{ request()->is('ida-activities*') ? 'current' : '' }} dropdown"><a href="/ida-activities">Activités IDA</a>
                                    <ul>
                                        <li><a href="/clubs-ida">Clubs IDA</a></li>
                                        <li><a href="/ida-activities/ida-infinity-africa-circle">Cercle Infinity</a></li>
                                        <li><a href="/fipa">FIPA</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('projects*') ? 'current' : '' }} dropdown"><a href="/projects">Projets</a>
                                    <ul>
                                        <li><a href="/projects">Internationalisation</a></li>
                                        <li><a href="/small-businesses">Petites Entreprises</a></li>
                                        <li><a href="/opportunities">Opportunités</a></li>
                                        <li><a href="/mauritania-free-zone">Zone Franche Mauritanie</a></li>
                                        <li class="{{ request()->is('water*') ? 'current' : '' }} dropdown"><a href="/water">Eau</a>
                                            <ul>
                                                <li><a href="/afwa">AFWA</a></li>
                                                <li><a href="/wwc">WWC</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ request()->is('women-empowerment*') ? 'current' : '' }} dropdown"><a href="/women-empowerment">Autonomisation des Femmes</a>
                                            <ul>
                                                <!-- <li><a href="/csw62">CSW62</a></li> -->
                                                <li><a href="/strategic-approach">Approche Stratégique</a></li>
                                                <li><a href="/nourdign-actions">Actions Nourdign</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('ada*') ? 'current' : '' }} dropdown"><a href="/ada">ADA</a>
                                    <ul>
                                        <li><a href="/ada-nelson-mandela">Nelson Mandela</a></li>
                                        <li><a href="/ada-leopold-sedar-senghor">Léopold Sédar Senghor</a></li>
                                        <li><a href="/ada-houphouet-bagny">Houphouët-Boigny</a></li>
                                        <li><a href="/ada-desmond-mpilo-tutu">Desmond Mpilo Tutu</a></li>
                                        <li><a href="/ada-colin-powell">Colin Powell</a></li>
                                        <li><a href="/ada-boutros-boutros-ghali">Boutros Boutros-Ghali</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('news*') ? 'current' : '' }}"><a href="/news">Actualités</a></li>
                                <li class="{{ request()->is('partnership*') ? 'current' : '' }} dropdown"><a href="/partnership">Partenaires</a>
                                    <ul>
                                        <li><a href="/membership">Adhésion</a></li>
                                        <li><a href="/partnership">Partenariat</a></li>
                                        <li><a href="/active-volunteers">Volontaires Actifs</a></li>
                                        <li><a href="/terms-and-conditions">Conditions Générales</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('contact-us') ? 'current' : '' }}"><a href="/contact-us">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header supprimé - Menu principal uniquement -->
</header>

<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <figure class="footer-logo my-2 mx-2"><a href="/"><img height="120px" width="120px" src="assets/images/logoida/logo_ida_traditionel_avec_texte.png" alt=""></a></figure>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <!-- <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Complexe Sicap-Point E Bat. B – 3e Et. 12500 – Dakar | Sénégal</li>
                <li><a href="tel:+221338254422">+221 33 825 44 22</a></li>
                <li><a href="info@idainternational.org">info@idainternational.org</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="https://x.com/initiativeda/" target="_blank"><i class="fab fa-twitter circle-icon"></i></a></li>
                <li><a href="https://www.facebook.com/IDAInternationall#" target="_blank"><i class="fab fa-facebook-f circle-icon"></i></a></li>
                <li><a href="https://www.instagram.com/idainternational/" target="_blank"><i class="fab fa-instagram circle-icon"></i></a></li>
                <li><a href="https://www.linkedin.com/company/ida-initiative-for-the-development-of-africa/" target="_blank"><i class="fab fa-linkedin-in circle-icon"></i></a></li>
                <li><a href="index"><span class="fab fa-youtube circle-icon"></span></a></li>
                <li><a href="/index.html"><i class="fab fa-pinterest-p circle-icon" target="_blank"></i></a></li>
            </ul>
        </div> -->
    </nav>
</div><!-- End Mobile Menu -->


