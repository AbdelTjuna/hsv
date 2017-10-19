<!DOCTYPE html>
<html lang="en">
    <head>

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

                    <div class="header__mobile-nav">
                        <span class="menu-circle>"></span>
                        <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <span class="menu-line menu-line-1"></span>
                        <span class="menu-line menu-line-2"></span>
                        <span class="menu-line menu-line-3"></span>
                    </span>
                        </a>
                        <div class="menu-overlay">
                            <a href="#"><img class="header__logo" src="{{URL::asset("img/nomorec-logo.svg")}}"></a>
                            <a href="#">Over No More C</a>
                            <a href="#">FAQ</a>
                            <a href="#">Contact</a>
                            <a href="#">Meedoen?</a>
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

        <div class="slider-pro" id="my-slider">
            <div class="sp-slides">

                <div class="sp-slide">
                    <h1 class="sp-layer" style="color: white; font-size: 32px;" data-position='topRight' data-horizontal='180' data-vertical="180">Laat je testen op hepatitis C</h1>
                    <h1 class="sp-layer" style="color: #FF7523;" data-position='topRight' data-horizontal='180' data-vertical="220">C WhatYouCanDo!</h1>
                    <img class="sp-image" src="{{URL::asset("img/generic6.jpg")}}"/>
                </div>

                <div class="sp-slide">
                    <h1 class="sp-layer" style="color: white; font-size: 32px;" data-position='topRight' data-horizontal='180' data-vertical='180'>Laat je testen op hepatitis C</h1>
                    <h1 class="sp-layer" style="color: #FF7523;" data-position='topRight' data-horizontal='180' data-vertical='230'>C WhatYouCanDo!</h1>
                    <img class="sp-image" src="{{URL::asset("img/generic6.jpg")}}"/>
                </div>

                <div class="sp-slide">
                    <h1 class="sp-layer" style="color: white; font-size: 32px;" data-position='topRight' data-horizontal='180' data-vertical='180'>Laat je testen op hepatitis C</h1>
                    <h1 class="sp-layer" style="color: #FF7523;" data-position='topRight' data-horizontal='180' data-vertical='230'>C WhatYouCanDo!</h1>
                    <img class="sp-image" src="{{URL::asset("img/generic6.jpg")}}"/>
                </div>

                <div class="sp-slide">
                    <h1 class="sp-layer" style="color: white; font-size: 32px;" data-position='topRight' data-horizontal='180' data-vertical='180'>Laat je testen op hepatitis C</h1>
                    <h1 class="sp-layer" style="color: #FF7523;" data-position='topRight' data-horizontal='180' data-vertical='230'>C WhatYouCanDo!</h1>
                    <img class="sp-image" src="{{URL::asset("img/generic6.jpg")}}"/>
                </div>


            <div class="sp-slide">
                <h1 class="sp-layer" style="color: white; font-size: 32px;" data-position='topRight' data-horizontal='180' data-vertical='180'>Laat je testen op hepatitis C</h1>
                <h1 class="sp-layer" style="color: #FF7523;" data-position='topRight' data-horizontal='180' data-vertical='230'>C WhatYouCanDo!</h1>
                <img class="sp-image" src="{{URL::asset("img/generic6.jpg")}}"/>
            </div>

            <div class="sp-slide">
                <h1 class="sp-layer" style="color: white; font-size: 32px;" data-position='topRight' data-horizontal='180' data-vertical='180'>Laat je testen op hepatitis C</h1>
                <h1 class="sp-layer" style="color: #FF7523;" data-position='topRight' data-horizontal='180' data-vertical='230'>C WhatYouCanDo!</h1>
                <img class="sp-image" src="{{URL::asset("img/generic6.jpg")}}"/>
            </div>
            </div>

            <div class="sp-thumbnails">

                <div class="sp-thumbnail red-thumbnail">
                    <p class="red-content">Moet ik me testen?</p>
                </div>

                <div class="sp-thumbnail yellow-thumbnail">
                    <p class="yellow-content">Alles over hepc</p>
                </div>

                <div class="sp-thumbnail orange-thumbnail">
                    <p class="orange-content">Thuis testen op hepc</p>
                </div>

                <div class="sp-thumbnail green-thumbnail">
                    <p class="green-content">Hoe beperk ik het risico?</p>
                </div>

                <div class="sp-thumbnail blue-thumbnail">
                    <p class="blue-content">No More C Toolbox bestellen</p>
                </div>

                <div class="sp-thumbnail purple-thumbnail">
                    <p class="purple-content">Hepc, wat nu?</p>
                </div>
            </div>
        </div>


    <div class="text-container">
        <div class="wrap">
            <h1>
                Dit is een stukje faketekst en niet bedoeld om te lezen maar om een betere
                indruk te krijgen hoe de tekst er uit eindelijk.
            </h1>
            <div class="content-container">
                <p>En niet bedoeld om te lezen, maar om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien. En niet bedoeld om te lezen, maar om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien.</p>
                <p>En niet bedoeld om te lezen, maar om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien. En niet bedoeld om te lezen, maar om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien.</p>
            </div>
        </div>
    </div>


    <div class="video-container">

        <h1>Dit is een stukje faketekst en niet bedoeld.</h1>

        <div class="wrap">
            <div class="video-item">
                <a href="https://www.youtube.com/embed/sKqt6e7EcCs" data-lity><img src="{{URL::asset("img/videoicon.png")}}"/></a>
                <div>
                    <h2>En is niet bedoeld om te lezen</h2>
                    <p class="video-content">Om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien. En is niet bedoeld om te lezen, maar om een betere indruk</p>
                </div>
            </div>

            <div class="video-item">
                <a href="https://www.youtube.com/embed/sKqt6e7EcCs" data-lity><img src="{{URL::asset("img/videoicon.png")}}"/></a>
                <div class="video-content">
                    <h2>En is niet bedoeld om te lezen</h2>
                    <p class="video-content">Om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien. En is niet bedoeld om te lezen, maar om een betere indruk</p>
                </div>
            </div>

            <div class="video-item">
                <a href="https://www.youtube.com/embed/sKqt6e7EcCs" data-lity><img src="{{URL::asset("img/videoicon.png")}}"/></a>
                <div class="video-content">
                    <h2>En is niet bedoeld om te lezen</h2>
                    <p class="video-content">Om een betere indruk te krijgen hoe de tekst er uit eindelijk uit komt te zien. En is niet bedoeld om te lezen, maar om een betere indruk</p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="footer-gradient"></div>

    <footer>
        <div class="footer__logos">
            <div class="wrap">
                <ul>
                    <li><a href="https://www.amc.nl/web/Zorg.htm"><img class="header__logo--top" src="{{URL::asset("img/amc.svg")}}"/></a></li>
                    <li><a href="http://www.ggd.amsterdam.nl/"><img class="header__logo--top" src="{{URL::asset("img/ggdamsterdam.svg")}}"/></a></li>
                    <li><a href="https://www.soaaids.nl/nl"><img class="header__logo--top" src="{{URL::asset("img/soaids.svg")}}"/></a></li>
                </ul>

                <p>© - NO MORE C - All Rights Reserved.</p>
            </div>
        </div>

    </footer>

        <link rel="stylesheet" href="css/app.css" media="all">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.0/lity.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.0/lity.css"></script>
        <script src="js/jquery.sliderPro.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>

