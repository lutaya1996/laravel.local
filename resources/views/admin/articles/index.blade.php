@extends('layouts.base')

@section('content')

    <section>

        <!-- Blog Start -->

        <x-container>


            <x-title class="text-center mb-5">

                <x-slot name="first_head">

                    {{__('Наш блог')}}

                </x-slot>

                <x-slot  name="second_head">

                    {{__('О питомцах')}}

                </x-slot>

                <div class="text-right mb-3">

                    <a href="{{route('admin.articles.create')}}"><button   class="btn btn-secondary text-right">

                            {{__('Создать статью')}}

                        </button></a>

                </div>

            </x-title>


            <div class="row pb-3">

                @foreach ($articles as $article)

                    <x-card.index>

                        <x-card.border class="mb-2">

                            <x-card.img src="{{asset($article->image->path ?? '')}}"/>

                            <x-card.body class="bg-light p-4">

                                <x-card.title>

                                    {!! $article->title !!}

                                </x-card.title>

                                <div class="d-flex mb-3">

                                    <small class="mr-2"><i class="fa fa-user text-muted"></i> {{$article->author->name}}
                                    </small>
                                    <small class="mr-2"><i
                                            class="fa fa-folder text-muted"></i> {{$article->category->name}}
                                    </small>
                                    <small class="mr-2"><i
                                            class="fa fa-comments text-muted"></i> {{$article->comments->count()}}
                                    </small>

                                </div>

                                <p>{{mb_substr($article->content, 0, 150)}}</p>

                                    <x-link class="mb-3" href="{{route('admin.articles.edit', $article->slug)}}">

                                        {{__('Редактировать статью')}}

                                    </x-link>


                                    <x-link class="text-secondary mb-3" href="{{route('admin.articles.show', $article->slug)}}">

                                        {{__('Читать статью')}}

                                    </x-link>

                            </x-card.body>

                        </x-card.border>

                    </x-card.index>

                @endforeach

            </div>

        </x-container>


        <!-- Blog End -->

    </section>

@endsection
