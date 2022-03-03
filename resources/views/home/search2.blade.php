@extends('layouts.layout2')

@section('title','ХвостатыеNews  :: Поиск')


@section('slider')
    <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Результаты поиска: {{ $search }}</h2>
        </div>
    </div>
@endsection

@section('content')
    @if($posts->count())
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="blog-entry ftco-animate">
                    <a href="#" class="img img-2" style="background-image: url({{ $post->getImage()}});"></a>
                    <div class="text text-2 pt-2 mt-3">
                    <span class="category mb-3 d-block"><a
                            href="{{ route('categories.single',['slug'=> $post->category->slug]) }}">{{ $post->category->title }}</a></span>
                        <h3 class="mb-4"><a
                                href="{{ route('posts.single',['slug'=>$post->slug]) }}">{{ $post->title }}</a>
                        </h3>
                        <p class="mb-4">{!! $post->description !!}</p>
                        <div class="author mb-4 d-flex align-items-center">

                            <div class="ml-3 info">
                                <span>Written by</span>
                                <h3><a href="#">Хозяин чудовищ</a>, <span>{{ $post->getPostDate() }}</span></h3>
                            </div>
                        </div>
                        <div class="meta-wrap align-items-center">
                            <div class="half order-md-last">
                                <p class="meta">
                                    <span><i class="icon-eye"></i>{{ $post->views }}</span>
                                    <span><i class="icon-comment"></i>{{ $post->comments->count() }}</span>
                                </p>
                            </div>
                            <div class="half">
                                <p><a href="{{ route('posts.single',['slug'=>$post->slug]) }}" class="btn py-2">Открыть
                                        пост
                                        <span class="ion-ios-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-4">
            <div class="blog-entry ftco-animate">
                <div class="text text-2 pt-2 mt-3">
                    <p>По Вашему запросу ничего не найдено =((</p>
                </div>
            </div>
        </div>
    @endif

    <div class="col-md-4 offset-md-4">
        <nav class="pagination">
            {{ $posts->appends(['search'=>request()->search])->links() }}
        </nav>
    </div>
@endsection
