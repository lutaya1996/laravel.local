@extends('layouts.base')

@section('content')

    <section>

        <div class="container-fluid pt-5">

            <x-link href="{{route('admin.articles')}}" class="text-left mb-2 py-5 px-5">

                {{__('Назад')}}

            </x-link>

            <x-title class="text-center mb-5 pt-5">

                <x-slot name="first_head">

                    {{__("Создаем статью")}}

                </x-slot>

            </x-title>


            <div class="row justify-content-center">

                <div class="col-12 col-sm-8 mb-5">

                    <div class="form">

                        <div id="success">


                        <x-form method="post" action="{{ route('admin.articles.store') }}">

                            <div class="control-group">

                                <label for="image" class="mt-3">Ссылка на картинку</label>

                                <input type="text" class="form-control p-4 mb-3 " id="image" name="image" value="" />

                            </div>

                            <div class="control-group">

                                <label for="title" class="mt-3">Заголовок статьи</label>

                                <textarea  class="form-control p-4 mb-3 " rows="2" id="title" name="title"></textarea>

                            </div>

                            <div class="control-group">

                                <label for="url_key" class="mt-3">url_key статьи</label>

                                <input type="text" class="form-control p-4 mb-3 " rows="2" id="url_key" name="slug" value="" />

                            </div>

                            <div class="control-group">

                                <label for="content" class="mt-3">Содержание статьи</label>

                                <input id="content" type="hidden" name="content">

                                <trix-editor input="content"></trix-editor>

                            </div>

                            <div class="control-group">

                                <label for="tag" class="mt-3">Категория статьи</label>

                                <input type="text" class="form-control p-4 mb-3"  rows="2" id="tag" name="tag" value="" />

                            </div>
                            <div class="control-group">

                                <label for="author" class="mt-3">Автор статьи</label>

                                <input type="text" class="form-control p-4 mb-3 " rows="2" id="author" name="author" value="" />

                            </div>

                            <div class="control-group">

                                <label for="published_date" class="mt-3">Дата публикации статьи</label>

                                <input type="text" class="form-control p-4 mb-3" rows="2" id="published_date" name="published_date" value="" />

                            </div>


                            <div class="text-center">

                                <x-form.button class="mb-3" type="submit" >

                                    {{__('Создать статью')}}

                                </x-form.button>

                            </div>

                        </x-form>

                        </div>

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
