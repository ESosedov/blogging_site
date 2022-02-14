
@extends('layouts.category_layout')

@section('title','ХвостатыеNews  :: '.$tag->title)

@section('page-title')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 clo-sm-12 col-xs-12">
                <h2>Tag: {{ $tag->title }}</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                    <li class="breadcrumb-item active">{{ $tag->title }}</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <article class="blog-post mt-5">

        @foreach($posts as $post)
            <div class="blog-post-image">
                <a href="{{ route('posts.single',['slug'=>$post->slug]) }}"><img src="{{  $post->getImage() }}" alt="" class="img-thumbnail mt-2" width="400"></a>
            </div>
            <div class="blog-post-body">
                <h2><a href="{{ route('posts.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
                <div class="post-meta">
                    <span>by <a href="#">Хозяин чудовищ</a></span>/
                    <span><i class="fa fa-clock-o"></i>{{ $post->getPostDate() }}</span>/
                    <span><i class="fa fa-eye"></i>{{ $post->views }}</span>/
                    <span><i class="fa fa-comment-o "></i> <a href="{{ route('categories.single',['slug'=> $post->category->slug]) }}">{{ $post->category->title }}</a></span>
                </div>
                <p>{!! $post->description !!}</p>
                <div class="read-more"><a href="{{ route('posts.single',['slug'=>$post->slug]) }}">Открыть пост</a></div>
            </div>
        @endforeach
        {{ $posts->links() }}
    </article>


@endsection
