<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/swiper.jquery.js"></script>
        <script src="js/swiper-init.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
    </head>

    <body>


        <header class="header">

            <div class="header__logos">
                <div class="wrap">
                    <ul>
                        <li><a href="https://www.amc.nl/web/Zorg.htm"><img class="header__logo--top" src="{{URL::asset("img/amc.svg")}}"/></a></li>
                        <li><a href="http://www.ggd.amsterdam.nl/"><img class="header__logo--top" src="{{URL::asset("img/ggdamsterdam.svg")}}"/></a></li>
                        <li><a href="https://www.soaaids.nl/nl"><img class="header__logo--top" src="{{URL::asset("img/soaids.svg")}}"/></a></li>
                    </ul>
                </div>
            </div>
            <div class="header__main-nav">
                <div class="wrap">
                    <div class="header__main-nav__content">
                        <a href="#"><img class="header__logo" src="{{URL::asset("img/nomorec-logo.svg")}}"></a>
                        <ul>
                            <li><a href="#">Over No More C</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Meedoen?</a></li>
                        </ul>
                    </div>
                    <div class="header__main-nav__content">
                        <div class="language-switch">
                            <a href="#">EN</a>
                            <a href="#">NL</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__sub-nav">
                <div class="wrap">
                    <ul>
                        <li><a href="#">Inloggen</a>
                        <li><a href="#">Mijn test uitslag</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide first-slide">
                    <div class="wrap">
                        <div class="slide-content">
                            <h1>Laat je testen op hepatitis C</h1>
                            <h2>C WhatYouCanDo!</h2>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide second-slide">
                    <div class="wrap">
                        <div class="slide-content">
                        <h1>Laat je testen op hepatitis C</h1>
                        <h2>C WhatYouCanDo!</h2>
                    </div>
                    </div>
                </div>

                <div class="swiper-slide third-slide">
                    <div class="wrap">
                        <div class="slide-content">
                            <h1>Laat je testen op hepatitis C</h1>
                            <h2>C WhatYouCanDo!</h2>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide fourth-slide">
                    <div class="wrap">
                        <div class="slide-content">
                            <h1>Laat je testen op hepatitis C</h1>
                            <h2>C WhatYouCanDo!</h2>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide fifth-slide">
                    <div class="wrap">
                        <div class="slide-content">
                            <h1>Laat je testen op hepatitis C</h1>
                            <h2>C WhatYouCanDo!</h2>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide sixth-slide">
                    <div class="wrap">
                        <div class="slide-content">
                            <h1>Laat je testen op hepatitis C</h1>
                            <h2>C WhatYouCanDo!</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    <div class="container">
        <div class="wrap">
            <h1>
                Dit is een stukje faketekst en niet bedoeld om te lezen maar om een betere
                indruk te krijgen hoe de tekst er uit eindelijk.
            </h1>
            <p>En niet bedoeld om te lezen, maar om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien.</p>
            <p>En niet bedoeld om te lezen, maar om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien.</p>
        </div>


    </div>

    </body>
</html>

