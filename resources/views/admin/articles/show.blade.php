@extends('layouts.base')

@section('content')

    <!-- Main Article Start -->

    <x-container>


        <x-link href="{{route('admin.articles')}}" class="text-left mb-2">

            {{__('Назад')}}

        </x-link>

        <div class="row pt-5">

            <div class="col-lg-8">

                <x-title class="text-left mb-4">

                    <h1 class="text-secondary mb-3">{{$title}}</h1>

                    <h2 class="mb-3">{!! $article->title!!}</h2>

                    <div class="d-index-flex mb-2">

                        <span class="mr-3"><i class="fa fa-user text-muted"></i> {{$article->author->name}}</span>
                        <span class="mr-3"><i class="fa fa-folder text-muted"></i> {{$article->category->name}}</span>
                        <span class="mr-3"><i
                                class="fa fa-comments text-muted"></i>{{$article->comments->count()}}</span>
                    </div>

                </x-title>

                <div class="mb-5">

                    <img class="img-fluid w-100 mb-4" src="{{asset($article->image->path ?? '')}}" alt="Image">

                    <p>{!! $article->content!!}</p>

                </div>


                <!-- Main Article End-->


                <!--Author of article start-->

                <div class="media bg-light mb-5 p-4 p-md-5">

                    <img src="{{$author->image->path ?? ''}}" alt="Image" class="img-fluid mr-5 mt-1" style="width: 100px;">

                    <div class="media-body">
                        <h5 class="mb-3">{{$author->name}}</h5>
                        <p class="m-0">{{$author->profession}}</p>
                        <h6 class="mb-3 mt-3">{{$author->created_at}}</h6>
                    </div>

                </div>

                <!--Author of article End-->

                <x-form.index method="delete" action="{{ route('admin.articles.delete', ['slug' => $article->slug]) }}">

                    <div class="text-center">

                        <x-form.button class="mb-3" type="submit">

                            {{__('Удалить')}}

                        </x-form.button>

                    </div>

                </x-form.index>

                <!-- Comments Start -->


                <!--Comment Form Start-->

            </div>

            <!--Comment Form End-->

            <!-- Comments End -->


            <!-- Меню справа Start -->

            <x-sidebar/>

        </div>

    </x-container>

    <!-- Меню справа End-->

@endsection
