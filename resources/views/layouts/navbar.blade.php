@include('admin.layouts.alerts')
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="about.html">Contact</a></li>
            </ul>

            <form class="nav navbar-nav navbar-right " method="get" action="{{ route('search') }}">
                <input name="s" id="s" class="@error('s') is-invalid @enderror" type="text" placeholder="..." required>
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-reddit"></i></a></li>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

