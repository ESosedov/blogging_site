@extends('layouts.layout')

@section('title','ХвостатыеNews  :: '.$post->title)

@section('content')
    <article class="blog-post">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
            <li class="breadcrumb-item"><a
                    href="{{ route('categories.single', ['slug'=>$post->category->slug]) }}">{{ $post->category->title }}</a>
            </li>
            <li class="breadcrumb-item active">{{ $post->title }}</li>
        </ol>
        <div class="blog-post-image" width="300">
            <a href="#"><img src="{{ $post->getImage() }}"></a>
        </div>
        <div class="blog-post-body">
            <h2><a href="post.html"></a>{{ $post->title }}</h2>
            <div class="post-meta"><span>by <a href="#">Хозяин чудовищ</a></span>/<span><i class="fa fa-clock-o"></i>{{ $post->getPostData() }}</span>/<span><i
                        class="fa fa-eye"></i>{{ $post->views }}</span></div>
            <div class="blog-post-text">
                <p>{!! $post->content !!}</p>
            </div>
            @if($post->tags->count())
                <div class="">
                    <span>Теги</span>
                    @foreach($post->tags as $tag)
                        <i class="fa fa-tag"><a href="{{ route('tags.single', ['slug'=>$tag->slug]) }}">{{ $tag->title }}</a></i>
                    @endforeach
                </div>
            @endif
        </div>
    </article>
@endsection

