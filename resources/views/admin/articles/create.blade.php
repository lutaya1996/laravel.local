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

                                <x-form.label for="image" class="mt-3">

                                    {{__('Ссылка на картинку')}}

                                </x-form.label>

                                <x-form.input id="image" name="image" :value />

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="title" class="mt-3">

                                    {{__('Заголовок статьи')}}

                                </x-form.label>

                                <x-form.textarea  class="mb-3" rows="2" id="title" name="title"></x-form.textarea>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="slug" class="mt-3">

                                    {{__('url_key статьи')}}

                                </x-form.label>

                                <x-form.input id="slug" name="slug" :value />

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="content" class="mt-3">

                                    {{__('Содержание статьи')}}

                                </x-form.label>

                                <x-trix name="content"/>

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="category" class="mt-3">

                                    {{__('Категория статьи')}}

                                </x-form.label>

                                <x-form.input  id="category" name="category" :value />

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="author" class="mt-3">

                                    {{__('Автор статьи')}}

                                </x-form.label>

                                <x-form.input id="author" name="author" :value />

                            </x-form.item>

                            <x-form.item>

                                <x-form.label for="published_date" class="mt-3">

                                    {{__('Дата публикации статьи')}}

                                </x-form.label>

                                <x-form.input   id="published_date" name="published_date" :value/>

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

