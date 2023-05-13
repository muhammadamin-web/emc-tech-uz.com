<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/about.css">
    <title>Document</title>
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
                <li><a href="#" class="lang" key="">About{{ __('app.about') }}</a></li>
                <li><a href="index.html#projects" class="lang" key="">Projects{{ __('app.projects') }}</a></li>
                <li><a href="#contact" class="lang" key="">Contact{{ __('app.contact') }}</a></li>
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


<div class="about">
    <img src="assets/images/about.jpg" alt="" class="about_img">
    <div class="container about_container">
        <h1 class="page_title lang about_title" key="">{{ __('app.about') }}</h1>
        <h4 class="page_text lang about_text" key="">{{ __('app.about_page_text') }}</h4>
    </div>
</div>


    <footer>
        <div class="footer_container">
            <div class="contact" id="contact">
                <div class="title_footer lang" key="">{{ __('app.contact') }}</div>
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