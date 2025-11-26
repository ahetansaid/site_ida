@extends('layouts.default')

@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">Accueil</a></li>
                <li>Donation</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- policy-section -->
<section class="policy-section bg-color-2">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-9.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_five">
                    <div class="content-box">
                        <div class="sec-title light left">
                            <h5>Donate for the cause</h5>
                            <h2>Pick a way of donating</h2>
                            <p>Big or small all help is appreciated</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <div id="content_block_six">
                    <div class="content-box">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-4">Paypal</li>
                                    <li class="tab-btn" data-tab="#tab-5">Credit Card</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-4">
                                    <div class="content-inner">
                                        <p>If you have an account</p>
                                        <form action="#" method="post">
                                            <label class="form-group w-100">
                                                <i class="fas fa-user"></i>
                                                <input type="text" name="firstname" placeholder="Firstname">
                                            </label>
                                            <label class="form-group w-100">
                                                <i class="fas fa-user-alt"></i>
                                                <input type="text" name="lastname" placeholder="Lastname">
                                            </label>
                                            <label class="form-group w-100">
                                                <i class="fas fa-envelope-open"></i>
                                                <input type="email" name="email" placeholder="Email">
                                            </label>
                                            <label class="form-group w-100">
                                                <i class="fas fa-map"></i>
                                                <input type="text" name="country" placeholder="Country">
                                            </label>
                                            <label class="form-group w-100">
                                                <i class="fas fa-map-signs"></i>
                                                <input type="text" name="region" placeholder="Region">
                                            </label>
                                            <label class="form-group w-100">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <input type="text" name="address" placeholder="Address">
                                            </label>
                                            <label class="form-group w-100">
                                                <i class="fas fa-map-pin"></i>
                                                <input type="text" name="zip code" placeholder="ZIP CODE">
                                            </label>
                                            <div class="form-group message-btn w-100">
                                                <button type="submit" class="theme-btn style-two"><a class="text-white" href="https://www.paypal.com/donate/?hosted_button_id=GTJETU8WLSNRE" target="_blank">Donate via Paypal <i class="icon-2 fab fa-paypal text-white"></i></a></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab" id="tab-5">
                                    <div class="content-inner">
                                        <form action="#" method="post">
                                            <div class="row clearfix">
                                                <p>Personnal information</p>
                                                <label class="form-group w-100">
                                                    <i class="fas fa-user"></i>
                                                    <input type="text" name="firstname" placeholder="Firstname" required>
                                                </label>
                                                <label class="form-group w-100">
                                                    <i class="fas fa-user-alt"></i>
                                                    <input type="text" name="lastname" placeholder="Lastname" required>
                                                </label>
                                                <label class="form-group w-100">
                                                    <i class="fas fa-envelope-open"></i>
                                                    <input type="email" name="email" placeholder="Email" required>
                                                </label>
                                                <label class="form-group w-100">
                                                    <i class="fas fa-map"></i>
                                                    <input type="text" name="country" placeholder="Country" required>
                                                </label>
                                                <label class="form-group w-100">
                                                    <i class="fas fa-map-signs"></i>
                                                    <input type="text" name="region" placeholder="Region" required>
                                                </label>
                                                <label class="form-group w-100">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <input type="text" name="address" placeholder="Address" required>
                                                </label>
                                                <label class="form-group w-100">
                                                    <i class="fas fa-map-pin"></i>
                                                    <input type="text" name="zip code" placeholder="ZIP CODE" required>
                                                </label>
                                                <p>Credit card information</p>
                                                <label class="form-group w-100">
                                                    <i class="fab fa-cc-visa"></i>
                                                    <i class="fab fa-cc-mastercard"></i>
                                                    <input type="text" name="credit card number" placeholder="XXXX XXXX XXXX XXXX" required="">
                                                </label>
                                                <label class="form-group w-25">
                                                    <i class="fa fa-calendar"></i>
                                                    <input type="text" name="credit card day" placeholder="DD" required>
                                                </label>
                                                <label class="form-group w-25">
                                                    <i class="fa fa-calendar"></i>
                                                    <input type="text" name="credit card month" placeholder="MM" required>
                                                </label>
                                                <label class="form-group w-50">
                                                    <i class="fa fa-credit-card"></i>
                                                    <input type="text" name="cvc" placeholder="CVC" required>
                                                </label>
                                                <div class="form-group message-btn w-100">
                                                    <button type="submit" class="theme-btn style-two">Donate</button>
                                                </div>
                                            </div>
                                        </form>
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
<!-- policy-section end -->
@endsection
