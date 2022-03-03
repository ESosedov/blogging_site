@extends('layouts.layout2')

@section('title','ХвостатыеNews  :: '.$post->title)


@section('content')

    <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3 font-weight-bold">{{ $post->title }}</h2>
        <p>
            <img src="{{ $post->getImage()}}" alt="" class="img-fluid">
        </p>
        <p>{{ $post->content }}</p>
        @if($post->tags->count())
            <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                    @foreach($post->tags as $tag)
                        <a href="{{ route('tags.single', ['slug'=>$tag->slug]) }}"
                           class="tag-cloud-link">{{ $tag->title }}</a>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="about-author d-flex px-4 bg-light">
            <div class="bio mr-5">
                <div>
                    <span class="icon-calendar"></span> {{ $post->getPostDate() }} /
                    <span class="icon-chat"></span> {{ $post->comments->count() }} /
                    <span class="icon-eye"></span> {{ $post->views }} /
                    <span class="icon-pages"></span> {{ $post->category->title }}

                </div>
            </div>
        </div>


        <div class="pt-5 mt-5">
            @if($post->comments->count())
                <h3 class="mb-5 font-weight-bold">Всего комментариев: {{ $post->comments->count() }} </h3>
                <ul class="comment-list">
                    @foreach($post->comments as $comment)
                        <li class="comment">
                            <div class="vcard bio">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $comment->user->name }}</h3>
                                <div class="meta">{{ $comment->CommentDate }}</div>
                                <p>{{ $comment->body }}</p>
                                @auth()
                                <form action="{{ route('comments.destroy', ['slug'=>$post->slug, 'comment'=>$comment->id]) }}"
                                      class="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <span class="icon-remove"></span>
                                        <span>удалить комментарий</span>
                                    </button>
                                </form>
                            </div>
                            @endauth
                        </li>
                    @endforeach
                </ul>
            @else
                <h4 class="mb-5 font-weight-bold">Комментариев пока нет. Вы можете быть первым!</h4>
            @endif
        <!-- END comment-list -->
            @auth()
                <div class="comment-form-wrap pt-5">
                    <h5 class="mb-5">Оставить комментарий</h5>
                    <form action="{{ route('comments.store', ['slug'=>$post->slug]) }}"
                          class="p-3 p-md-5 bg-light" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group">
                            <label for="body">Сообщение</label>
                            <textarea name="body" id="body" cols="30" rows="3"
                                      class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Отправить" class="btn py-3 px-4 btn-primary">
                        </div>

                    </form>
                </div>
            @endauth
            @guest()
                <div class="comment-form-wrap pt-5 text-center">
                    <h5>Только зарегистрированные пользователи могут оставлять комментарии.</h5>
                    <a href="{{ route('login.create') }}">Войти</a>
                </div>
            @endguest
        </div>
    </div> <!-- .col-md-8 -->
@endsection








