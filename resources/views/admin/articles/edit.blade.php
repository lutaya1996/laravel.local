@extends('layouts.base')

@section('content')

    <section>

    <x-form.container>

        <x-link href="{{route('admin.articles')}}" class="offset-1 text-left mb-2 py-4 px-5">

            {{__('Назад')}}

        </x-link>

        <div class="d-flex flex-column text-center mb-5 pt-5">

            <h1 class="text-secondary mb-3">{{__('Редактируем статью')}}</h1>

            <h4 class="m-0 mt-3">{!!$article->title!!}</h4>

        </div>

        <div class="row justify-content-center">

            <div class="col-12 col-sm-8 mb-5">

                <div class="contact-form">

                    <div id="success">


                    <x-form.index method="PUT" action="{{ route('admin.articles.update', $article->slug) }}">

                        <x-form.item>

                            <x-form.label for="image" class="mt-3 required">

                                {{__('Ссылка на картинку')}}

                            </x-form.label>

                            <x-form.input id="image" name="image" :value="$article->image->path" />

                        </x-form.item>

                        <x-form.item>

                            <x-form.label for="title" class="mt-3">

                                {{__('Заголовок статьи')}}

                            </x-form.label>

                            <x-form.textarea  rows="2" id="title" name="title">{{$article->title}}</x-form.textarea>

                        </x-form.item>

                        <x-form.item>

                            <x-form.label for="url_key" class="mt-3">

                                {{__('url_key статьи')}}

                            </x-form.label>

                            <x-form.input id="url_key" name="slug" :value="$article->slug" />

                        </x-form.item>

                        <x-form.item>

                            <x-form.label for="content" class="mt-3">

                                {{__('Содержание статьи')}}

                            </x-form.label>

                            <x-trix name="content" :value="$article->content"/>

                        </x-form.item>

                        <x-form.item>

                            <x-form.label for="category" class="mt-3">

                                {{__('Категория статьи')}}

                            </x-form.label>

                            <x-form.input  id="category" name="category" :value="$article->category->name" />

                        </x-form.item>

                        <x-form.item>

                            <x-form.label for="author" class="mt-3">

                                {{__('Автор статьи')}}

                            </x-form.label>

                            <x-form.input id="author" name="author" :value="$article->author->name" />

                        </x-form.item>

                        <x-form.item>

                            <x-form.label for="published_date" class="mt-3">

                                {{__('Дата публикации статьи')}}

                            </x-form.label>

                            <x-form.input  id="published_date" name="published_date" :value="$article->created_at" />

                        </x-form.item>


                        <div class="text-center">

                            <x-form.button class="mb-3" type="submit">

                                {{__('Редактировать')}}

                            </x-form.button>

                        </div>

                    </x-form.index>

                    </div>

                </div>

            </div>

        </div>

    </x-form.container>

    </section>

    @endsection


