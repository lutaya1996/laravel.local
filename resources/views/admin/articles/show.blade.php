@extends('layouts.base')

@section('content')

    <!-- Main Article Start -->
    <div class="container py-5">


        <a href="{{route('admin.articles')}}" class="text-left mb-2 font-weight-bold">

            {{__('Назад')}}

        </a>

        <div class="row pt-5">
            <div class="col-lg-8">


                <div class="d-flex flex-column text-left mb-4">
                    <h1 class="text-secondary mb-3">{{$title}}</h1>
                    <h2 class="mb-3">{!! $article->title!!}</h2>

                    <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-user text-muted"></i> {{$article->author->name}}</span>
                        <span class="mr-3"><i class="fa fa-folder text-muted"></i> {{$article->category->name}}</span>
                        <span class="mr-3"><i
                                class="fa fa-comments text-muted"></i>{{$article->comments->count()}}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <img class="img-fluid w-100 mb-4" src="{{asset($article->image->path)}}" alt="Image">
                    <p>{!! $article->content!!}</p>
                </div>

                <!-- Main Article End-->

                <!-- Comments Start -->

                <!--Author of article start-->
                <div class="media bg-light mb-5 p-4 p-md-5">
                    <img src="{{$author->image->path}}" alt="Image" class="img-fluid mr-4 mt-1" style="width: 80px;">
                    <div class="media-body">
                        <h5 class="mb-3">{{$author->name}}</h5>
                        <p class="m-0">{{$author->profession}}</p>
                    </div>
                </div>
                <!--Author of article End-->



                <!--Comment Form Start-->


            <!--Comment Form End-->

            <!-- Comments End -->
            </div>


            <!-- Меню справа Start -->

            <x-sidebar/>

        </div>
    </div>

    <!-- Меню справа End-->

@endsection
