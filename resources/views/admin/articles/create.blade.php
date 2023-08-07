@extends('layouts.base')

@section('content')

    <section>

        <div class="container-fluid pt-5">

            <x-link href="{{route('admin.articles')}}" class="offset-1 mb-3 py-5 px-5">

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


                        <x-form method="POST" action="{{ route('admin.articles.store') }}">

                            <x-form.item>

                                <x-form.label for="active" class="mt-3">

                                    {{__('Показывать статью')}}

                                </x-form.label>

                                <x-checkbox />

                                <x-error name="active"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="image" class="mt-3">

                                    {{__('Ссылка на картинку')}}

                                </x-form.label>

                                <x-form.input id="image" name="image" />

                                <x-error name="image"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="title" class="mt-3">

                                    {{__('Заголовок статьи')}}

                                </x-form.label>

                                <x-trix name="title"/>

                                <x-error name="title"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="slug" class="mt-3">

                                    {{__('url_key статьи')}}

                                </x-form.label>

                                <x-form.input id="slug" name="slug" />

                                <x-error name="slug"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="content" class="mt-3">

                                    {{__('Содержание статьи')}}

                                </x-form.label>

                                <x-trix name="content"/>

                                <x-error name="content"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="category" class="mt-3">

                                    {{__('Категория статьи')}}

                                </x-form.label>

                                <x-form.input  id="category" name="category"  />

                                <x-error name="category"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="tag" class="mt-3">

                                    {{__('Тег статьи')}}

                                </x-form.label>

                                <x-form.input  id="tag" name="tag" />

                                <x-error name="tag"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="author" class="mt-3">

                                    {{__('Автор статьи')}}

                                </x-form.label>

                                <x-form.input id="author" name="author" />

                                <x-error name="author"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="published_at" class="mt-3">

                                    {{__('Дата публикации статьи')}}

                                </x-form.label>

                                <x-form.input   id="published_at" name="published_at"

                                placeholder="dd.mm.yyyy"/>

                                <x-error name="published_at"/>

                            </x-form.item>


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

