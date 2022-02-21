<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
    <h1 id="colorlib-logo"><a href="{{ route('home') }}">ХвостатыеNEWS<span>.</span></a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="@if(Route::is('home')) colorlib-active @endif"><a href="{{ route('home') }}">Главная</a></li>
            <li class="@if(Route::is('foto')) colorlib-active @endif"><a href="{{ route('foto') }}">Фотографии</a></li>
            <li class="@if(Route::is('about')) colorlib-active @endif"><a href="{{ route('about') }}">О нас</a></li>
            <li><a href="{{ route('login.create') }}">Войти</a></li>
            <li class="@if(Route::is('contact')) colorlib-active @endif"><a href="{{ route('contact') }}">Контакты</a>
            </li>
        </ul>
    </nav>
    <div class="colorlib-footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                href="https://colorlib.com" target="_blank">Colorlib</a>
        <ul>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</aside>
