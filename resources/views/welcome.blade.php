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
                                <img src="{{asset('images/lg.png')}}" alt="Cytonn Resident"/>
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
                            <li><a href="#"><img src="{{asset('images/usa.png')}}" alt="Cytonn Resident"/></a></li>
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-middle static-slider">
                <div class="columns medium-8">
                    <h2>Luxurious Apartments</h2>
                    <h2>offers from £300</h2>
                    <p>Spend less on fare, and more where youre there</p>
                    <button class="button">View More &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="row slider-bottom-text ">
                <div class="column slide-foot">
                    <div class="row align-middle foot-content show-for-medium-up hide-for-small-only">
                        <div class="column medium-2 looking-for"><h5>I'm looking for</h5></div>
                        <div class="column "><input class="input" type="text" placeholder="Select Location"></div>
                        <div class="column ">
                            <div class="input-group">
                                <span class="input-group-label input date-icon"><i class="fa fa-calendar "></i></span>
                                <input class="input" type="text" placeholder="Check in Date">
                            </div>
                        </div>
                        <div class="column ">
                            <div class="input-group">
                                <span class="input-group-label input date-icon"><i class="fa fa-calendar"></i></span>
                                <input class="input" type="text" placeholder="Check out Date">
                            </div>
                        </div>
                        <div class="column reservation "><a>Make a Reservation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-arrow-right"></i></a></div>
                    </div>

                    <div class="row align-middle show-for-small-only foot-content ">
                        <div class="column small-12 looking-for-small text-center"><h5>I'm looking for</h5></div>
                        <div class="column small-12"><input class="input" type="text" placeholder="Select Location">
                        </div>
                        <div class="column small-12">
                            <div class="input-group">
                                <span class="input-group-label input date-icon"><i class="fa fa-calendar "></i></span>
                                <input class="input" type="text" placeholder="Check in Date">
                            </div>
                        </div>
                        <div class="column small-12">
                            <div class="input-group">
                                <span class="input-group-label input date-icon"><i class="fa fa-calendar"></i></span>
                                <input class="input" type="text" placeholder="Check out Date">
                            </div>
                        </div>
                    <div class="column small-12 reservation-small text-center"><a>Make a Reservation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-arrow-right"></i></a></div>
                </div>

            </div>

        </div>
</div>
</section>


<section class="grid-container fluid section-two">
    <div class="row experience-div" >
        <div class="column small-12 medium-6 align-self-bottom experience">
            <h2>Giving you an experience,
            Something better than
            just living</h2><br/>
        </div>
        <div class="column small-12  medium-6  align-self-bottom ">
            <img src="http://via.placeholder.com/350x200">
        </div>
    </div>

    <div class="row workplace-div" >
        <div class="column small-12  medium-6 align-self-top workplace ">
            <p>
                Refocus your workplace on people. Refocus <br/>
                your workplace on people. Refocus your <br/>
                workplace on people. Refocus your workplace<br/>
                on people
            </p>

            <a>Learn More &nbsp; &nbsp; &nbsp; <i class="fa fa-arrow-right"></i></a>
        </div>
        <div class="column small-12  medium-6 text-center">
            <img src="http://via.placeholder.com/450x200">
        </div>
    </div>

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
