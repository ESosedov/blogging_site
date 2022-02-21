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
                    <span class="icon-person"></span> Хозяин чудовищ /
                    <span class="icon-chat"></span> 19 /
                    <span class="icon-eye"></span> {{ $post->views }} /
                    <span class="icon-pages"></span> {{ $post->category->title }}

                </div>

            </div>
        </div>


        <div class="pt-5 mt-5">
            <h3 class="mb-5 font-weight-bold">6 Comments</h3>
            <ul class="comment-list">
                <li class="comment">
                    <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">October 03, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                            necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                            sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>
                </li>

                <li class="comment">
                    <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">October 03, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                            necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                            sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>

                    <ul class="children">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">October 03, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                    laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat
                                    saepe enim sapiente iste iure! Quam voluptas earum impedit
                                    necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>


                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>John Doe</h3>
                                        <div class="meta">October 03, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                            autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                            voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>

                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="images/person_1.jpg" alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>John Doe</h3>
                                                <div class="meta">October 03, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Pariatur quidem laborum necessitatibus, ipsam impedit
                                                    vitae autem, eum officia, fugiat saepe enim sapiente
                                                    iste iure! Quam voluptas earum impedit necessitatibus,
                                                    nihil?</p>
                                                <p><a href="#" class="reply">Reply</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="comment">
                    <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">October 03, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                            necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                            sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>
                </li>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-3 p-md-5 bg-light">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div> <!-- .col-md-8 -->
@endsection








