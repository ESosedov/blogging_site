@extends('layouts.layout')

@section('title','ХвостатыеNews  :: Главная')

@section('slider')

    <section class="main-slider">
        <ul class="bxslider">
            <li><div class="slider-item"><img src="public/assets/front/images/1140x500-3-3.jpg" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">пока как-то так</a></h2></div></li>
            <li><div class="slider-item"><img src="public/assets/front/images/1140x500-1-1.jpg" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">и так</a></h2></div></li>
            <li><div class="slider-item"><img src="public/assets/front/images/1140x500-2-2.jpg" title="Funky roots" /><h2><a href="post.html" title="Vintage-Inspired Finds for Your Home">и еще так</a></h2></div></li>
        </ul>
    </section>
    @endsection

@section('content')
    <article class="blog-post">
        @foreach($posts as $post)
        <div class="blog-post-image">

            <a href="{{ route('posts.single',['slug'=>$post->slug]) }}"><img src="{{ $post->getImage()}}" alt="" class="img-thumbnail" width="400"></a>
        </div>
        <div class="blog-post-body text-center">
            <h2><a href="{{ route('posts.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
            <div class="post-meta">
                <span>by <a href="#">Хозяин чудовищ</a></span>/
                <span><i class="fa fa-clock-o"></i>{{ $post->getPostDate() }}</span>/
                <span><i class="fa fa-eye"></i>{{ $post->views }}</span>/
                <span><i class=""></i> <a href="{{ route('categories.single',['slug'=> $post->category->slug]) }}">{{ $post->category->title }}</a></span>
            </div>
            <p>{!! $post->description !!}</p>
            <div class="read-more"><a href="{{ route('posts.single',['slug'=>$post->slug]) }}">Открыть пост</a></div>
        </div>
        @endforeach
        {{ $posts->links() }}
    </article>


@endsection
