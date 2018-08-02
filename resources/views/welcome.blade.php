<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel {{ app()->version() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">

    <section class="grid-container fluid section-one">
        <div class="grid-container">
            <div class=" ">
                <div class="title-bar " data-responsive-toggle="mainNavigation" data-hide-for="medium">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
                        <div class="title-bar-title">Menu</div>
                    </div>
                    <div class="title-bar-right">
                        <img src="{{asset('images/cytonn-residence.png')}}" alt="Cytonn Resident">
                    </div>
                </div>
                <div class="top-bar" id="mainNavigation">
                    <div class="top-bar-left">
                        <ul class="menu vertical medium-horizontal">
                            <li class="menu-text hide-for-small-only">
                                <img src="{{asset('images/lg.png')}}" alt="Cytonn Resident" />
                            </li>
                            <li><a href="#">Our Residents</a></li>
                            <li><a href="#">Room & Suites</a></li>
                            <li><a href="#">Meeting & Conferences</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">|</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu vertical medium-horizontal">
                            <li><a href="#">Who we are</a></li>
                            <li><a href="#">Media Centre</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#"><img src="{{asset('images/usa.png')}}" alt="Cytonn Resident" width="20px"/></a></li>
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="grid-x static-slider">
                <div class="cell">

                </div>
            </div>
        </div>
    </section>

    <section class="grid-container fluid section-two">

    </section>

    <section class="grid-container fluid section-three">

    </section>

    <section class="grid-container fluid section-four">


    </section>

    <section class="grid-container fluid section-five">


    </section>

    <section class="grid-container fluid section-six">


    </section>

    <section class="grid-container fluid section-seven">


    </section>

    <section class="grid-container fluid section-eight">


    </section>


    <section class="grid-container fluid section-nine">

    <footer class="grid-container  ">

        <div class="grid-x expanded callout secondary">
            <div class="small-6 large-3 cell">
                <p class="lead">Offices</p>
                <ul class="menu vertical">
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                    <li><a href="#">Four</a></li>
                </ul>
            </div>
            <div class="small-6 large-3 cell">
                <p class="lead">Solar Systems</p>
                <ul class="menu vertical">
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                    <li><a href="#">Four</a></li>
                </ul>
            </div>
            <div class="small-6 large-3 cell">
                <p class="lead">Contact</p>
                <ul class="menu vertical">
                    <li><a href="#"><i class="fi-social-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fi-social-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fi-social-instagram"></i> Instagram</a></li>
                    <li><a href="#"><i class="fi-social-pinterest"></i> Pinterest</a></li>
                </ul>
            </div>
            <div class="small-6 large-3 cell">
                <p class="lead">Offices</p>
                <ul class="menu vertical">
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                    <li><a href="#">Four</a></li>
                </ul>
            </div>
        </div>
        <div class="grid-x">
            <div class="medium-6 cell">
                <ul class="menu align-center">
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Partner</a></li>
                    <li><a href="#">Explore</a></li>
                </ul>
            </div>
            <div class="medium-6 cell">
                <ul class="menu align-center">
                    <li class="menu-text">Copyright 2018</li>
                </ul>
            </div>
        </div>
    </footer>
    </section>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).foundation();
</script>


</body>
</html>
