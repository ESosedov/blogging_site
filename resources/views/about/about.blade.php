<!DOCTYPE html>
<html lang="ru">
<head>
    <title>ХвостатыеNews :: О Нас</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/front/elen/css/front.css') }}">
</head>
<body>

<div id="colorlib-page">
@include('layouts.navbar2') <!-- END COLORLIB-ASIDE -->
    <div id="colorlib-main">
        <div class="hero-wrap hero-wrap-2 hero-wrap-3 js-fullheight"
             style="background-image: url({{ asset('assets/front/elen/images/about.jpg') }});"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center">

                    <div class="desc">
                        <h2 class="cltext subheading ">Привет это</h2>
                        <h1 class="mb-4">Молли и Анатолий</h1>
                        <p class="mb-4 cltext">Мы живем в городе Кудрово, что находится на самой границе с
                            Санкт-Петербургом, Толик перебрался сюда из деревни Романовка почти три года назад, а вот
                            Молли помимо своего породистого происхождения у нас еще и столичная особа и недавно она
                            отпраздновала свой первый день рождения.
                            В даном блоге мы хотим сохранить все самые интересные и забавные моменты нашей жизни.</p>
                        <ul class="ftco-social mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="{{ asset('assets/front/elen/js/front.js') }}"></script>

</body>
</html>
