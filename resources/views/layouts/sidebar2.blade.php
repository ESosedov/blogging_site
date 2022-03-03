<div class="col-lg-4 sidebar ftco-animate">
    <div class="sidebar-box">
        <form action="{{ route('search') }}" class="search-form">
            <div class="form-group">
                <span class="icon icon-search"></span>
                <input name="search" type="text" class="form-control @error('search') is-invalid @enderror" placeholder="поиск.."
                       required>
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Категории</h3>
        <ul class="categories">
            @foreach($cats as $cat)
                <li><a href="{{ route('categories.single',['slug'=>$cat->slug]) }}">{{ $cat->title }} <span>({{ $cat->posts_count }})</span></a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Популярные посты</h3>
        @foreach($popular_posts as $pop_post)
            <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{$pop_post->getImage()}});"></a>
                <div class="text">
                    <h3 class="heading"><a
                            href="{{  route('posts.single',['slug'=>$pop_post->slug]) }}">{{ $pop_post->title }}</a>
                    </h3>
                    <div class="meta">
                        <div><a href=""><span class="icon-calendar"></span> {{ $pop_post->getPostDate() }}</a></div>
                        <div><a href="#"><span class="icon-person"></span> Хозяин чудовищ</a></div>
                        <div><a href="#"><span class="icon-eye"></span> {{ $pop_post->views }}</a></div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Теги</h3>
        <ul class="tagcloud">
            @foreach($allTags as $tag)
                <a href="{{ route('tags.single', ['slug'=>$tag->slug]) }}" class="tag-cloud-link">{{ $tag->title }}</a>
            @endforeach
        </ul>
    </div>

    <div class="sidebar-box subs-wrap img" style="background-image: url(public/assets/front/elen/images/bg_1.jpg);">
        <div class="overlay"></div>
        <h3 class="mb-4 sidebar-heading">Новостная рассылка</h3>
        <p class="mb-4">Чтобы не пропускать ХвостатыеNEWS подпишитесь на нашу рассылку! </p>
        <form action="#" class="subscribe-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email адрес">
                <input type="submit" value="Подписаться" class="mt-2 btn btn-white submit">
            </div>
        </form>
    </div>


    <div class="sidebar-box ftco-animate">
        <h3 class="sidebar-heading">Paragraph</h3>
        <p>
            Здесь можно что-то дописать или рекламу
        </p>
    </div>
</div><!-- END COL -->
