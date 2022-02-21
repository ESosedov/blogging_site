@extends('layouts.contact')

@section('content')
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4 font-weight-bold">Контактная информация</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 offset-md-3 order-md-last pr-md-5">
                    <form method="post" action="{{ route('contact') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ваше Имя" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Ваш Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Тема Письма" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea name="text" id="text" cols="30" rows="7" class="form-control"
                                      placeholder="Ваше Сообщение"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Отправить Сообщение" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                {{--                <div class="col-md-6">--}}

                {{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
