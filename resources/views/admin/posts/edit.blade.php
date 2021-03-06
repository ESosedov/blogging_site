@extends('admin.layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование поста</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Пост {{ $post->title }}</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('posts.update',$post->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Цитата</label>
                                    <textarea name="description"
                                              class="form-control @error('description') is-invalid @enderror" rows="2"
                                              id="description"
                                    >{{ $post->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content">Контент</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror"
                                              rows="3" id="content">{{ $post->content }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror"
                                            id="category_id" name="category_id">
                                        <option>Выберите категорию</option>
                                        @foreach($categories as $id => $title)
                                            <option value="{{  $id }}"
                                                    @if($id == $post->category_id) selected @endif >{{ $title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tags">Теги</label>
                                    <div class="select2-purple">
                                        <select name="tags[]" id="tags" class="select2" multiple="multiple"
                                                data-placeholder="Выберите теги"
                                                data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            @foreach($tags as $id => $title)
                                                <option value="{{  $id }}"
                                                        @if(in_array($id, $post->tags->pluck('id')->all())) selected @endif>{{ $title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="thumbnail">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                   class="custom-file-input @error('thumbnail') is-invalid @enderror"
                                                   name="thumbnail" id="thumbnail">
                                            <label class="custom-file-label" for="thumbnail">"Выберите
                                                изображение"</label>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ $post->getImage()}}" alt="" class="img-thumbnail mt-2" width="300">
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
