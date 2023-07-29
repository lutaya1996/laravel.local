@extends('components.layouts.base')

@section('content')

    <!-- Article Start -->
    <div class="container py-5">
        <div class="d-flex align-items-center mb-3 ">
            <!--TODO-->
            <a class=" font-weight-bold mb-2" href=""> Все статьи</a>
        </div>
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h4 class="text-secondary mb-3">{{$article->url}}</h4>
                    <h1 class="mb-3"> {{ $article->title}} </h1>
                    <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-user text-muted"></i>  {{$article->author->name}} </span>
                        <span class="mr-3"><i class="fa fa-folder text-muted"></i> {{$article->category->name}} </span>
                        <span class="mr-3"><i
                                class="fa fa-comments text-muted"></i> {{$article->comments->count()}}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <img class="img-fluid w-100 mb-4" src="{{asset($article->image->path)}}" alt="Image">
                    <p><?= $article->content ?></p>
                </div>

                <!--  Article End-->

                <!--Author of article start-->
                <div class="media bg-light mb-5 p-4 p-md-5">
                    <img src="" alt="Image" class="img-fluid mr-4 mt-1"
                         style="width: 80px;">
                    <div class="media-body">
                        <h5 class="mb-3"></h5>
                        <p class="m-0"></p>
                    </div>
                </div>
                <!--Author of article End-->

                <!-- Comments Start -->

                <!--Comment Form Start-->

            </div>
            <!--Comment Form End-->

            <!-- Comments End -->


            <!-- Меню справа Start -->
            sidebar

            <!-- Меню справа End-->
        </div>
    </div>

@stop
