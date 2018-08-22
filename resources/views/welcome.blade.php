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
            <top-menu></top-menu>
            <div class="row align-middle static-slider">
                <div class="columns medium-8">
                    <h2>Luxurious Apartments</h2>
                    <h2>offers from £300</h2>
                    <p>Spend less on fare, and more where youre there</p>
                    <button class="button">View More &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <reservation-form></reservation-form>
        </div>
    </section>

    <better-experience></better-experience>

    <explore-products></explore-products>

    <offer-packages></offer-packages>

    <home-deal></home-deal>

    <news-articles></news-articles>


    <footer-component></footer-component>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script>
    $(document).foundation();
</script>

</body>
</html>
