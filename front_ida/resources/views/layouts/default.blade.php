<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>IDA International</title>

    <!-- Fav Icon -->
    <link rel="icon" href="/img/logo_ida.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="/assets/css/flaticon.css" rel="stylesheet">
    <link href="/assets/css/owl.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <link href="/assets/css/rtl.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
    <link href="/assets/css/custom-colors.css" rel="stylesheet">

    <!-- gTranslate Widget -->
    <script>
        window.gtranslateSettings = {
            "default_language": "fr",
            "switcher_horizontal_position": "inline",
            "float_switcher_open_direction": "bottom"
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js"></script>
    
    <!-- Widget de langue alternatif simple -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'fr',
                includedLanguages: 'en,fr,es,de,it,pt,ar',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>


<!-- page wrapper -->

<body class="boxed_wrapper ltr" style="padding-top: 100px;">


    <!-- main-header end -->
    @include('layouts.header')
    <!-- Mobile Menu  -->
    @yield('content')


    @include('layouts.footer')



    <!--Scroll to top-->
    <button class="scroll-top style-five scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="upper-box">
                                <div class="logo">
                                    <a href="index.html"><img src="/assets/images/sidebar-logo.png" alt="" /></a>
                                </div>
                                <div class="text">
                                    <p>Exercitation ullamco laboris nis aliquip sed conseqrure dolorn repreh deris ptate velit ecepteur duis.</p>
                                </div>
                            </div>
                            <div class="side-menu-box">
                                <div class="side-menu">
                                    <nav class="menu-box">
                                        <div class="menu-outer">

                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="info-box">
                                <h3>Get in touch</h3>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ</li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                    <li><i class="fas fa-headphones-alt"></i><a href="tel:101005200369">+1 0100 5200 369</a></li>
                                    <li><i class="far fa-clock"></i>Monday to Friday: 9am - 6pm</li>
                                </ul>
                                <form action="contact.html" method="post" class="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                        <button type="submit" class="theme-btn style-one">subscribe now</button>
                                    </div>
                                </form>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->


    <!-- jequery plugins -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/validation.js"></script>
    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/jquery.countTo.js"></script>
    <script src="/assets/js/scrollbar.js"></script>
    <script src="/assets/js/nav-tool.js"></script>
    <script src="/assets/js/TweenMax.min.js"></script>
    <script src="/assets/js/circle-progress.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>

    <!-- main-js -->
    <script src="/assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>
