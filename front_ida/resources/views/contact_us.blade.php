@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title centred" >
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Nous Contacter</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- contact-information -->
<section class="contact-information centred">
    <div class="auto-container">
        <div class="sec-title style-two right">
            <h5>nos informations de contact</h5>
            <h2>Contactez-nous</h2>
        </div>
        <div class="row clearfix justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 single-column my-5">
                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box2"><i class="far fa-map my-icon "></i></div>
                        <h3>SENEGAL</h3>
                        <p>Complexe Sicap-Point E Bat. B – 3e Et.<br />12500 – Dakar | Sénégal</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 single-column my-5">
                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box2"><i class="far fa-map my-icon"></i></div>
                        <h3>ITALY</h3>
                        <p>Temporary Branch<br />Viale Indro Montanelli, <br> 175 00168 – Roma | RM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 single-column my-5">
                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box2"><i class="far fa-map my-icon"></i></div>
                        <h3>GENEVE</h3>
                        <p>Diplomatic Branch<br />Rue de la Cloche n. 8 <br> 1201 – Geneve – CH</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 single-column my-5">
                <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box2"><i class="far fa-map my-icon "></i></div>
                        <h3>DUBAI</h3>
                        <p>DUBAI Representative Office <br> 838 Andy Street Lane, Madison<br />Office 1708 DAMAC XL Tower <br> Business Bay – Dubai
                            <br> United Arab Emirates
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column my-5">
                <div class="single-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box2"><i class="fas fa-phone my-icon "></i></div>
                        <h3>Support Téléphonique</h3>
                        <p>Tél : <a href="tel:+221338564298">+221 33 856 42 98</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column my-5">
                <div class="single-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box2"><i class="far fa-envelope-open my-icon "></i></div>
                        <h3>Informations Email</h3>
                        <p><a href="mailto:info@idainternational.org">info@idainternational.org</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-information end -->

<!-- contact-style-two -->
<section class="contact-style-two" style="background-image: url(assets/images/ada/ADA_cover.jpg);">
    <div class="auto-container">
        <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
            <div class="sec-title left light">
                <h5>Questions, Suggestions?</h5>
                <h2>Drop Us a Line</h2>
                <p>Fields with * are obligatory</p>
            </div>
            <form method="post" action="#" id="contact-form" class="default-form *">
                <div class="row clearfix">
                    <label class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="username" placeholder="Votre Nom *" required="">
                    </label>
                    <label class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Adresse Email *" required="">
                    </label>
                    <label class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <input type="text" name="subject" placeholder="Sujet *" required="">
                    </label>
                    <label class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="message" placeholder="Message (optionnel)"></textarea>
                    </label>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                        <button class="theme-btn style-two" type="submit" name="submit-form">Nous Contacter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- contact-style-two end -->


<!-- google-map-section -->
<!--    <section class="google-map-section">-->
<!--        <div class="map-column">-->
<!--            <div class="google-map-area">-->
<!--                <div-->
<!--                        class="google-map"-->
<!--                        id="contact-google-map"-->
<!--                        data-map-lat="40.712776"-->
<!--                        data-map-lng="-74.005974"-->
<!--                        data-icon-path="assets/images/icons/map-marker.png"-->
<!--                        data-map-title="Brooklyn, New York, United Kingdom"-->
<!--                        data-map-zoom="12"-->
<!--                        data-markers='{-->
<!--                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/shape/map-marker.png"]-->
<!--                    }'>-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!-- google-map-section end -->

<!-- OpenStreetmap map-section -->
<section>
    <div class="google-map-section">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
            crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>

        <div id="map" style="height: 400px;"></div>

        <script>
            const map = L.map('map').setView([14.691113188392155, -17.458677705862062], 19); // Coordonnées à mettre

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Marker Dubai
            L.marker([25.180600279082622, 55.26749038282605]).addTo(map)
                .bindPopup('DUBAI Representative Office')
                .openPopup();

            // Marker Geneve
            L.marker([46.210960231018504, 6.150886654167158]).addTo(map)
                .bindPopup('Diplomatic Branch')
                .openPopup();

            // Marker Italy
            L.marker([41.928569002893575, 12.397574121182084]).addTo(map)
                .bindPopup('Temporary Branch')
                .openPopup();

            // Marker Dakar
            L.marker([14.691113188392155, -17.458677705862062]).addTo(map)
                .bindPopup('IDA International')
                .openPopup();
        </script>
    </div>
</section>
</section>
<!-- OpenStreetmap map-section end -->

@endsection
