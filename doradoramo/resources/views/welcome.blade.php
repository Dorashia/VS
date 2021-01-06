<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo asset('css/welcome.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/slick.css')?>" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/634430a69d.js" crossorigin="anonymous"></script>

        <title>看戏咯！</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <style>
            html, body {
                background: #FAF9FF;
                font-weight: 200;
                color: white;
                height: 100%;
                width: 100%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 100px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FF0A0A;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>

    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ URL::to('/images/banner1.jpg') }}" alt="Cinema" style="width:100%; height: 600px;">
                        </div>

                        <div class="item">
                            <img src="{{ URL::to('/images/banner2.jpg') }}" alt="King" style="width:100%; height: 600px;">
                        </div>
                        
                        <div class="item">
                            <img src="{{ URL::to('/images/banner3.jpg') }}" alt="Doraemon" style="width:100%; height: 600px;">
                        </div>

                        <div class="item">
                            <img src="{{ URL::to('/images/banner4.jpg') }}" alt="Busted" style="width:100%; height: 600px;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- showing detail -->
                <div class="movie-poster">
                    <section class="movie-tabs">
                        <ul class="movie-tabs-name">
                            <li class="movie-name"><span>Now Showing</span></li>
                        </ul>
                    </section>

                    <div class="for_slick_slider multiple-items">
                        <div class="items">
                            <img src="{{ URL::to('/images/cql_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>

                        <div class="items">
                            <img src="{{ URL::to('/images/crayon_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>

                        <div class="items">
                            <img src="{{ URL::to('/images/sao_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>

                        <div class="items">
                            <img src="{{ URL::to('/images/busted_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>

                        <div class="items">
                            <img src="{{ URL::to('/images/doraemon_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>
                        
                        <div class="items">
                            <img src="{{ URL::to('/images/kingDongman_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>
                        
                        <div class="items">
                            <img src="{{ URL::to('/images/soul_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>
                        
                        <div class="items">
                            <img src="{{ URL::to('/images/youth_poster.jpg') }}" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>

                    <footer>
                        <div class="icon">
                            <span> Jalan Selatan Utama, Off Jalan Skudai, 81300 Skudai, Johor</span>
                            <span> secretarial@sc.edu.my</span>
                            <span>  +607 5586605</span>
                        </div>
                    </footer>
            </div> 
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/slick.min.js') }}"></script>
        <script>
        $(function(){
            $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            centerMode: true,
            centerPadding: '0px',
            });
        });
        </script>
    </body>
</html>
