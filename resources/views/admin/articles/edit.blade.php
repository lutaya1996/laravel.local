@extends('layouts.base')

@section('content')

    <section>

<div class="container-fluid pt-5">

    <a href="{{route('admin.articles')}}" class="text-left mb-2 py-4 px-5 font-weight-bold">

        {{__('Назад')}}

    </a>

    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h1 class="text-secondary mb-3">Редактируем статью</h1>
        <h4 class="m-0 mt-3">{!!$article->title!!}</h4>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 mb-5">
            <div class="contact-form">
                <div id="success"></div>


                <form method="post" action="{{ route('admin.articles.update', $article->slug) }}">
                    @csrf

                    <div class="control-group">

                        <label for="image" class="mt-3">Ссылка на картинку</label>

                        <input type="text" class="form-control p-4 mb-3 " id="image" name="image" value="{{$article->image->path}}" />

                    </div>

                    <div class="control-group">
                        <label for="title" class="mt-3">Заголовок статьи</label>
                        <textarea  class="form-control p-4 mb-3 " rows="2" id="title" name="title">{{$article->title}}</textarea>

                    </div>

                    <div class="control-group">
                        <label for="url_key" class="mt-3">url_key статьи</label>
                        <input type="text" class="form-control p-4 mb-3 " rows="2" id="url_key" name="slug" value="{{$article->slug}}" />

                    </div>
                    <div class="control-group">
                        <label for="content" class="mt-3">Содержание статьи</label>
                        <input id="content" type="hidden" name="content" value="{!! $article->content !!}">

                        <trix-editor input="content" ></trix-editor>

                    </div>
                    <div class="control-group">
                        <label for="tag" class="mt-3">Категория статьи</label>
                        <input type="text" class="form-control p-4 mb-3"  rows="2" id="tag" name="tag" value="{{$article->category->name}}" />

                    </div>
                    <div class="control-group">
                        <label for="author" class="mt-3">Автор статьи</label>
                        <input type="text" class="form-control p-4 mb-3 " rows="2" id="author" name="author" value="{{$article->author->name}}" />

                    </div>
                    <div class="control-group">
                        <label for="published_date" class="mt-3">Дата публикации статьи</label>
                        <input type="text" class="form-control p-4 mb-3" rows="2" id="published_date" name="published_date" value="{{$article->created_at}}" />

                    </div>


                    <div class="text-center">
                        <input class="btn btn-primary py-3 px-5 mb-3 mt-3" type="submit" value="Редактировать">
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

    </section>

    @endsection

@once
@push('js')

    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

@endpush

@push('css')

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

@endpush

@endonce
