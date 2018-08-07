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
                        <img src="{{asset('images/lg.png')}}" alt="Cytonn Resident">
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
        <div class="row experience-div">
            <div class="column small-12 medium-6 align-self-bottom experience">
                <h2>Giving you an experience,
                    Something better than
                    just living</h2><br/>
            </div>
            <div class="column small-12  medium-6  align-self-bottom experience-img-one">
                <img src="{{asset('images/15.png')}}" alt=""/>
            </div>
        </div>

        <div class="row workplace-div">
            <div class="column small-12  medium-6 align-self-top workplace ">
                <p>
                    Refocus your workplace on people. Refocus <br/>
                    your workplace on people. Refocus your <br/>
                    workplace on people. Refocus your workplace<br/>
                    on people
                </p>

                <a>Learn More &nbsp; &nbsp; &nbsp; <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="column small-12  medium-6 text-center workplace-img-one">
                <img src="{{asset('images/16.png')}}" alt=""/>
            </div>
        </div>
    </section>


    <section class="grid-container fluid section-three">
        <div class="grid-container">
            <div class="grid-x products">
                <div class=" cell product-title">
                    <h2 class="text-center">Explore our Products</h2>
                </div>
                <div class=" cell product-more">
                    <p class="text-center">
                        Find the right design for enabling your people to do their best
                    </p>
                </div>
            </div>
            <div class="grid-x product-category">

                <div class="cell medium-3">
                    <div class="product-imge">
                        <img src="{{asset('/images/10.png')}}">
                    </div>
                    <p class="text-center">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                        Rooms and suits
                    </p>
                </div>
                <div class="cell medium-3">
                    <div class="product-imge">
                        <img src="{{asset('/images/11.png')}}">
                    </div>
                    <p class="text-center">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                        conferences and Meeting
                    </p>
                </div>
                <div class="cell medium-3">
                    <div class="product-imge">
                        <img src="{{asset('/images/13.png')}}">
                    </div>
                    <p class="text-center">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                        Dining
                    </p>
                </div>
                <div class="cell medium-3">
                    <div class="product-imge">
                        <img src="{{asset('/images/14.png')}}">
                    </div>
                    <p class="text-center">
                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                        Excursions and activities
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-container fluid section-four">
        <div class="grid-container ">
            <div class="row offer">
                <div class=" medium-9 ">
                    <h2 class="offer-title">
                        Special Offers & Packages
                    </h2>
                    <p>Find the right design for enabling your people do their best</p>
                </div>
                <div class=" medium-3  offer-more align-self-bottom">
                    <a href="#">View More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-container fluid section-five">
        <div class="grid-container ">
            <div class="grid-x">
                <div class=" medium-6 cell special-offer-img">
                    <img src="{{asset('/images/3.png')}}">
                </div>
                <div class=" medium-6 cell special-offer-img">
                    <img src="{{asset('/images/2.png')}}">
                </div>
            </div>
            <div class="grid-x ">
                <div class=" medium-6 cell special-offer-img">
                    <img src="{{asset('/images/4.png')}}">
                </div>
                <div class=" medium-6 cell special-offer-img">
                    <img src="{{asset('/images/5.png')}}">
                </div>
            </div>
        </div>
    </section>

    <section class="grid-container fluid section-six">
        <div class="grid-container ">
            <div class="row dream-home">
                <div class="column align-self-middle">
                    <h2 class="text-center">Find a dream home</h2>
                    <p class="text-center">find a top-rated home with amenities you need</p>
                    <a href="#" class=" button text-center">&nbsp;&nbsp;&nbsp;&nbsp;View Deal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-container fluid section-seven">
        <div class="grid-container ">
            <div class="row news">
                <div class=" medium-4 ">
                    <h2 class="news-title">
                        News & Articles
                    </h2>
                    <p>Find facts and figures on people and the environment,
                        or visualize the latest data on the world today</p>
                </div>
                <div class=" medium-8  news-more align-self-bottom">
                    <a href="#">View More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-container fluid section-eight">
        <div class="grid-container ">
            <div class="grid-x article">
                <div class="cell small-12 medium-8 article-left">
                    <div class="row article-content">
                        <div class="column medium-12 align-self-top">
                            <div class="date">
                                <p>MAY 24 2017</p>
                            </div>
                            <div class="medium-5">
                                <h5>Special Offers & Packages</h5>
                                <p>Find facts and figures on people and
                                    the environment, or visualize the latest
                                    data on the world today
                                </p>
                            </div>
                        </div>
                        <div class="column medium-12 align-self-bottom">
                            <span class="by">by:</span> <strong>Joel Imbwaga</strong>
                        </div>
                    </div>
                </div>
                <div class="cell small-12 medium-4 article-right">
                    <div class="row">
                        <div class="small-12 medium-12 article-one">
                            <div class="row article-content-small">
                                <div class="column medium-12 align-self-top">
                                    <div class="date">
                                        <p>MAY 24 2017</p>
                                    </div>
                                    <div class="title">
                                        <h5>Special offer & Packages</h5>
                                    </div>
                                </div>
                                <div class="column medium-12 align-self-bottom">
                                    <p><span class="by">by:</span> <strong> Joel Imbwaga</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class=" small-12 medium-12  article-two">
                            <div class="row article-content-small">
                                <div class="column medium-12 align-self-top">
                                    <div class="date">
                                        <p>MAY 24 2017</p>
                                    </div>
                                    <div class="title">
                                        <h5>Special offer & Packages</h5>
                                    </div>
                                </div>
                                <div class="column medium-12 align-self-bottom">
                                    <p><span class="by">by:</span> <strong>Joel Imbwaga</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-container fluid section-nine">
        <div class="grid-container ">
            <div class="grid-x">

            <div class="row  ">
                <div class="column medium-10 medium-offset-1">
                    <div class="orbit" role="region" aria-label="slider" data-orbit>
                        <ul class="orbit-container text-slider">

                            <li class="is-active orbit-slide">
                                <div class="docs-example-orbit-slide">
                                    <p class="text-center">
                                        " When most people travel to Nairobi, they want to see the mara.
                                        but i've been spending most of my time in neighborhood, living
                                        like locals."
                                    </p>
                                    <br>
                                    <p>From Joseph Wachira, Lived in Wasini</p>
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-example-orbit-slide">
                                    <p>
                                        " When most people travel to Nairobi, they want to see the mara.
                                        but i've been spending most of my time in neighborhood, living
                                        like locals."
                                    </p>
                                    <br>
                                    <p>From Joseph Wachira, Lived in Wasini</p>
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-example-orbit-slide">
                                    <p>
                                        " When most people travel to Nairobi, they want to see the mara.
                                        but i've been spending most of my time in neighborhood, living
                                        like locals."
                                    </p>
                                    <br>
                                    <p>From Joseph Wachira, Lived in Wasini</p>
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-example-orbit-slide">
                                    <p>
                                        " When most people travel to Nairobi, they want to see the mara.
                                        but i've been spending most of my time in neighborhood, living
                                        like locals."
                                    </p>
                                    <br>
                                    <p>From Joseph Wachira, Lived in Wasini</p>
                                </div>
                            </li>
                            <li class="orbit-slide">
                                <div class="docs-example-orbit-slide">
                                    <p>
                                        " When most people travel to Nairobi, they want to see the mara.
                                        but i've been spending most of my time in neighborhood, living
                                        like locals."
                                    </p>
                                    <br>
                                    <p>From Joseph Wachira, Lived in Wasini</p>
                                </div>
                            </li>
                        </ul>
                        <nav class="orbit-bullets">
                            <div class="slider-indicator">
                            <button class="is-active" data-slide="0"><span
                                        class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span>
                            </button>
                            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                            <button data-slide="4"><span class="show-for-sr">Fourth slide details.</span></button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section class="grid-container fluid section-ten">

        <footer class="grid-container  ">
            <br/>
            <br/>
            <br/>
            <br/>

            <div class="grid-x expanded callout secondary">
                <div class="cell medium-7">
                    <div class="grid-x">
                        <div class="small-4 large-4 cell">
                            <div class="footer-title">Cytonn Residents</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Our Values</a></li>
                                <li><a href="#">Timelines</a></li>
                                <li><a href="#">Videos</a></li>
                            </ul>
                            <div class="footer-title">For Apartments</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Living Spaces</a></li>
                            </ul>
                        </div>
                        <div class="small-4 large-4 cell">
                            <div class="footer-title">For Business</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Living Office</a></li>
                                <li><a href="#">Small Business Program</a></li>
                            </ul>
                            <div class="footer-title">For Education</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Education Solutions</a></li>
                            </ul>
                        </div>
                        <div class="small-4 large-4 cell">
                            <div class="footer-title">Get Help</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Care and Assembly</a></li>
                                <li><a href="#">FQA</a></li>
                            </ul>
                            <div class="footer-title">Contacts</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Media Relations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="medium-5">
                    <div class="grid-x">
                        <div class="small-4 medium-4 cell">
                            <div class="footer-title">Reservation</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Find an Apartment</a></li>
                                <li><a href="#">Residence Store</a></li>
                                <li><a href="#">Customer Journey</a></li>
                            </ul>
                            <div class="footer-title">Acccounts</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Account Sign-In</a></li>
                                <li><a href="#">Store</a></li>
                            </ul>
                        </div>
                        <div class="small-4 medium-8 ">

                            <div class="footer-title">Sign up for our newsletter</div>
                            <div class="row">
                                <div class="column-12">
                                    <div class="input-group sign-up">
                                        <input placeholder="Enter Email Address" class="input-group-field"
                                               type="number">
                                        <div class="input-group-button">
                                            <input type="submit" class="button secondary" value="Sign up">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="footer-title">Follow Us</div>
                            <ul class="menu horizontal follow-us ">
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                                <li><i class="fa fa-pinterest"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <br/>

            <div class="grid-x copy-right">
                <div class="medium-5 cell">
                    <ul class="menu ">
                        <li><a href="#"> <img src="{{asset('/images/usa.png')}}"> &nbsp; United States</a></li>
                    </ul>
                </div>

                <div class="medium-7 cell">
                    <ul class="menu copy-note">
                        <li class="menu-text">&copy 2018 Cytonn Residents</li>
                    </ul>
                </div>
            </div>

        </footer>
    </section>
    <section class="grid-container fluid section-eleven">
        <div class="grid-x">
            <div class="medium-12 cell">
                <ul class="menu align-center">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Site Feedback</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).foundation();
</script>


</body>
</html>
