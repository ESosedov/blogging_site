@extends('layouts.category_layout')

@section('title','ХвостатыеNews  :: '.$category->title)

@section('page-title')
    <section>
        <div class="sidebar-widget">
            <div class="widget-container">
                <div class="row">
                    <div class="col-lg-12 col-md-8 clo-sm-12 col-xs-12">
                        <h2 class="sidebar-title">{{ $category->title }}</h2>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <article class="blog-post mt-5">

        @foreach($posts as $post)
            <div class="blog-post-image">
                <a href="{{ route('posts.single',['slug'=>$post->slug]) }}"><img src="{{  $post->getImage() }}" alt=""
                                                                                 class="img-thumbnail mt-2" width="400"></a>
            </div>
            <div class="blog-post-body">
                <h2><a href="{{ route('posts.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h2>
                <div class="post-meta">
                    <span>by <a href="#">Хозяин чудовищ</a></span>/
                    <span><i class="fa fa-clock-o"></i>{{ $post->getPostDate() }}</span>/
                    <span><i class="fa fa-eye"></i>{{ $post->views }}</span>/
                    <span><i class="fa fa-comment-o "></i> <a
                            href="{{ route('categories.single',['slug'=> $category->slug]) }}">{{ $category->title }}</a></span>
                </div>
                <p>{!! $post->description !!}</p>
                <div class="read-more"><a href="{{ route('posts.single',['slug'=>$post->slug]) }}">Открыть пост</a>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    </article>


@endsection
