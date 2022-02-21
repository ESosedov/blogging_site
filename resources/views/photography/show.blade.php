@extends('layouts.photograhy_layout')

@section('title','ХвостатыеNews  :: Фотографии')



@section('content')
    <div class="photograhy">
        <div class="row no-gutters">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <a href="{{ route('posts.single',['slug'=>$post->slug]) }}"
                       class="photography-entry img d-flex justify-content-center align-items-center"
                       style="background-image: url({{ $post->getImage() }});">
                        <div class="overlay"></div>
                        <div class="text text-center">
                            <h3>{{ $post->title }}</h3>
                            <span>{{ $post->category->title }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
