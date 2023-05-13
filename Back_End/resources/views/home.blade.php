<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        rel="stylesheet">
    <title>EMC TECHNOLOGY</title>
</head>

<body>

    <nav id="navbar">

        <div class="menu">
            <input type="checkbox" id="check">
            <div class="logo">
                <a href="#">
                    <img src="assets/images/logo.jpg" alt="" class="logo_img">
              </a>
            </div>
            <ul>

                <label class="btn cancel"><i class="fa fa-close"></i></label>
                <li><a href="index.html" class="lang" key="" for="check">Home{{ __('app.home') }}</a></li>
                <li><a href="about.html" class="lang" key="">About{{ __('app.about') }}</a></li>
                <li><a href="#projects" class="lang" key="">Projects{{ __('app.projects') }}</a></li>
                <li><a href="#contact" class="lang" key="">{{ __('app.Contact') }}</a></li>
                <li><a href="services.html" class="lang" key="">Services{{ __('app.services') }}</a></li>
                <!-- <li><a href="#" class="lang" key="products">Products{{ __('app.about') }}</a></li> -->
                <div class="language_container">
                    <a class="lang-button active_lang lang_border" data-lang="en">EN{{ __('app.about') }}</a>
                    <a class="lang-button" data-lang="ru">RU{{ __('app.about') }}</a>
                </div>
            </ul>

            <label for="check" class="btn bars"><i class="fa fa-bars"></i></label>
        </div>
        </div>
    </nav>

    <div class="main-carousel" id="home">
        <div class="carousel">
            <div class="items">
                <div class="img_card carousel-image current">
                    <div class="img_text_container">
                        <div class="img_text">
                            <h1>EMC Technonology
                            </h1>
                            <h3 key="" class="lang">{{ __('app.slider_text') }}</h3>
                        </div>

                    </div>
                    <img src="assets/images/1.png" alt="" class=" " />
                </div>

                <div class="img_card carousel-image ">
                    <div class="img_text_container">
                        <div class="img_text">
                            <h1>EMC Technonology
                            </h1>
                            <h3 key="" class="lang">{{ __('app.slider_text') }}</h3>
                        </div>

                    </div>
                    <img src="assets/images/2.jpg" alt="" class=" " />
                </div>

                <div class="img_card carousel-image ">
                    <div class="img_text_container">
                        <div class="img_text">
                            <h1>EMC Technonology
                            </h1>
                            <h3 key="" class="lang">{{ __('app.slider_text') }}</h3>
                        </div>

                    </div>
                    <img src="assets/images/3.png" alt="" class=" " />
                </div>
            </div>
        </div>
        <!-- <div class="buttons">
          <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
          <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
        </div> -->
    </div>

    <div class="service" id="about">
        <h2 class="services_title lang" key=""> {{ __('app.services_title') }}</h2>

        <div class="services_container">
            <div class="services_slider">
                <img src="assets/images/1.png" alt="">
            </div>
            <div class="services_text">
                <div>
                    <p class="lang" key="about_text"></p>
                </div>
                <a href="services.html" class="more lang" key="">{{ __('app.more') }}</a>
            </div>
        </div>
    </div>

    <div class="projects" id="projects">
        <h2 class="projects_title lang" key=""> {{ __('app.projects') }}</h2>
        <div class="projects_container">
            <a href="project_page1.html" class="project_card">
                <img src="assets/images/project1.jpg" alt="">
                <h2 class="lang" key=""> {{ __('app.project_card_title1') }}</h2>
                <p class="lang" key=""> {{ __('app.project_card_text1') }}</p>
            {{ __('app.about') }}</a>
            <a href="project_page2.html" class="project_card">
                <img src="assets/images/project2.jpg" alt="">
                <h2 class="lang" key=""> {{ __('app.project_card_title2') }}</h2>
                <p class="lang" key=""> {{ __('app.project_card_text2') }}</p>
            {{ __('app.about') }}</a>
            <a href="project_page3.html" class="project_card">
                <img src="assets/images/project3.jpg" alt="" >
                <h2 class="lang" key=""> {{ __('app.project_card_title3') }}</h2>
                <p class="lang" key=""> {{ __('app.project_card_text3') }}</p>
            {{ __('app.about') }}</a>
        </div>
    </div>
     <div class="partners">
        <h2 class="projects_title lang" key="">Our  {{ __('app.partners_title') }}</h2>
        <div class="logo-slider">
            <div class="brand-carousel section-padding owl-carousel">
                <div class="single-logo"><img alt="" src="assets/images/partner1.jpg"></div>
                <div class="single-logo"><img alt="" src="assets/images/gold_step.jpg"></div>
                <div class="single-logo"><img alt="" src="assets/images/IIB.jpg"></div>
                <div class="single-logo"><img alt="" src="assets/images/gold_step.jpg"></div>
                <div class="single-logo"><img alt="" src="assets/images/partner1.jpg"></div>
                <div class="single-logo"><img alt="" src="assets/images/gold_step.jpg"></div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
            </script>
            <script>
                $('.brand-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                })

            </script>
            <!-- Add more logo slides as needed -->
        </div>


    </div>

    <footer>
        <div class="footer_container">
            <div class="contact" id="contact">
                <div class="title_footer lang" key=""> {{ __('app.contact') }}</div>
                <div class="phone_container">
                    <i class="fa fa-phone"></i>
                    <div class="phones">
                        <a href="tel:+998901225516">+998 90 122 55 16{{ __('app.about') }}</a>
                    </div>
                </div>
                <div class="mail_container">
                    <i class="fa fa-envelope"></i>
                    <div class="mail">
                        <a href="">Emc_technology@gmail.com{{ __('app.about') }}</a>
                    </div>
                </div>
            </div>
            <div class="time_location">
                <div class="title_footer lang" key="">{{ __('app.job_time_title') }}</div>

                <div class="time_container">
                    <i class="fa fa-clock-o"></i>
                    <div class="time">
                        <p class="lang" key="">{{ __('app.job_time') }}</p>
                    </div>
                </div>
                <!-- Каждый день
            с 10:00 до 22:00 -->
                <div class="location_container">
                    <i class="fa fa-map-marker"></i>
                    <div class="location">
                        <p class="lang" key="">{{ __('app.location') }}</p>
                    </div>
                </div>


            </div>
            <div class="social_netvork">
                <div class="title_footer lang" key="">{{ __('app.social_title') }}</div>

                <div class="telegram_container">
                    <i class="fa fa-telegram"></i>
                    <div class="telegram">
                        <a href="#">@Emc_technology{{ __('app.about') }}</a>
                    </div>
                </div>
                <div class="instagram_container">
                    <i class="fa fa-instagram"></i>
                    <div class="instagram">
                        <a href="">@Emc_technology{{ __('app.about') }}</a>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <div class="powered_by">
        <div class="powered_by_text">
            <P>© 2023 Powered by </P><a href="cmd-tech.uz"> CMD TECH{{ __('app.about') }}</a>
        </div>
    </div>

    <script src="assets/js/company_logo_slider.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/carusel.js"></script>

    <script src="assets/js/lang.js"></script>
</body>

</html>