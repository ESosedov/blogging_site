<aside>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">Популярные посты</h3>
        <div class="widget-container">
            @foreach($popular_posts as $pop_post)
                <article class="widget-post">
                    <div class="post-image">
                        <a href="{{  route('posts.single',['slug'=>$pop_post->slug]) }}"><img
                                src="${{$pop_post->getImage()}}" alt=""></a>
                    </div>
                    <div class="post-body">
                        <h2><a href="{{  route('posts.single',['slug'=>$pop_post->slug]) }}"><img
                                    src="{{$pop_post->getImage()}}" width="50"> <b>{{ $pop_post->title }}</b></a></h2>
                        <div class="post-meta">
                            <span><i class="fa fa-clock-o"></i> {{ $pop_post->getPostDate() }}</span> <span><a
                                    href="post.html"><i class="fa fa-eye"></i>{{ $pop_post->views }}</a></span>
                        </div>
                    </div>
                </article>
            @endforeach

        </div>
    </div>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">Категории</h3>
        <div class="widget-container">
            <ul>
                @foreach($cats as $cat)
                <li><a href="{{ route('categories.single',['slug'=>$cat->slug]) }}">{{ $cat->title }} <span> ({{ $cat->posts_count }})</span></a></li>
                    @endforeach

            </ul>
        </div>
    </div>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">Socials</h3>
        <div class="widget-container">
            <div class="widget-socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-reddit"></i></a>
            </div>
        </div>
    </div>
    <!-- sidebar-widget -->
    <div class="sidebar-widget">
        <h3 class="sidebar-title">About Me</h3>
        <div class="widget-container widget-about">
            <a href="post.html"><img src="public/assets/front/images/author.jpg" alt=""></a>
            <h4>Jamie Mooz</h4>
            <div class="author-title">Designer</div>
            <p>While everyone’s eyes are glued to the runway, it’s hard to ignore that there are major
                fashion moments on the front row too.</p>
        </div>
    </div>
</aside>
