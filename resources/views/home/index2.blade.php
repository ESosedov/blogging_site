@extends('layouts.layout2')

@section('title','ХвостатыеNews  :: Главная')

@section('logo')
    <div class="hero-wrap js-fullheight" style="background-image: url(public/assets/front/elen/images/2.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
            <div class="col-md-8 text text-center">

                <div class="desc">
                    <h2 class="subheading">Привет это</h2>
                    <h1 class="mb-4">ХвостатыеNEWS<span>.</span></h1>
                    <p class="mb-4 cltext">Заметки из жизни вредного деревенского, но дворянских кровей, кота Анатолия и
                        милейшей бордер колли Молли.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slider')
    <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Все Заметки</h2>
            <p>Здесь Анатолий и Молли хотят поделиться с Вами самыми забавными и интересными моментами своей жизни.</p>
        </div>
    </div>
@endsection

@section('content')
    @foreach($posts as $post)
        <div class="col-md-4">
            <div class="blog-entry ftco-animate">
                <a href="{{ route('posts.single',['slug'=>$post->slug]) }}" class="img img-2"
                   style="background-image: url({{ $post->getImage()}});"></a>
                <div class="text text-2 pt-2 mt-3">
                    <span class="category mb-3 d-block"><a
                            href="{{ route('categories.single',['slug'=> $post->category->slug]) }}">{{ $post->category->title }}</a></span>
                    <h3 class="mb-4"><a href="{{ route('posts.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a>
                    </h3>
                    <p class="mb-4">{!! $post->description !!}</p>
                    <div class="author mb-4 d-flex align-items-center">
                        <div class="info">
                            <h3><span>{{ $post->getPostDate() }}</span></h3>
                        </div>
                    </div>
                    <div class="meta-wrap align-items-center">
                        <div class="half order-md-last">
                            <p class="meta">
                                <span><i class="icon-heart"></i>3</span>
                                <span><i class="icon-eye"></i>{{ $post->views }}</span>
                                <span><i class="icon-comment"></i>{{ $post->comments->count() }}</span>
                            </p>
                        </div>
                        <div class="half">
                            <p><a href="{{ route('posts.single',['slug'=>$post->slug]) }}" class="btn py-2">Открыть пост
                                    <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <div class="col-md-4 offset-md-4">
        <nav class="pagination">
            {{ $posts->links() }}
        </nav>
    </div>
@endsection
