@extends('layouts.base')

@section('content')

    <section>

        <!-- Blog Start -->
        <div class="container pt-5">
            <div class="d-flex flex-column text-center mb-3 pt-3">
                <h1 class="text-secondary mb-3">{{__('Наш блог')}}</h1>
                <h2 class="mb-3">{{__('О питомцах')}}</h2>


                <div class="text-right mb-3">

                   <a href="{{route('admin.articles.create')}}"><button   class="btn btn-secondary text-right">

                           {{__('Создать статью')}}

                       </button></a>

                </div>


            </div>



            <div class="row pb-3">

                @foreach ($articles as $article)

                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 mb-2">
                            <img class="card-img-top" src="{{asset($article->image->path)}}" alt="">
                            <div class="card-body bg-light p-4">
                                <h4 class="card-title text-truncate">{!! $article->title !!}</h4>
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

                                <div>

                                    <a class="font-weight-bold mb-3" href="{{route('admin.articles.edit', $article->slug)}}">Редактировать
                                        статью</a>

                                </div>

                                <div>
                                    <a class="font-weight-bold text-secondary mb-3" href="{{route('admin.articles.show', $article->slug)}}">Читать
                                        статью</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>


        <!-- Blog End -->

    </section>

@endsection
