
 <!--Поисковик Start-->

<div class="col-lg-4 mt-5 mt-lg-0" xmlns="http://www.w3.org/1999/html">

    <div class="mb-5">

        <x-form.index action="{{route('blog.index', ['search'=>request('search')])}}" >

            <div class="input-group">

                <input type="text" name="search" value="{{request('search')}}" class="form-control form-control-lg" placeholder="Поиск"/>

               <x-mini-button/>

            </div>

        </x-form.index>

    </div>

    <!--Поисковик End-->

    <!--Categories start-->

    <div class="mb-5">

        <h3 class="mb-4">{{__('Категории')}}</h3>

        <nav class="nav flex-column">

          @foreach($categories as $category)

                <x-link class="nav-link"  href="{{route('blog.index', ['category'=>$category->name])}}">

                    {{$category->name}}

                    <span class="badge badge-primary badge-pill">{{$category->articles->count()}}</span>

                </x-link>


            @endforeach

        </nav>

    </div>

    <!--categories end-->

    <!--Свежие посты начало-->

    <div class="mb-5">

        <h3 class="mb-4">{{__('Свежие посты')}}</h3>

        @foreach ($articles as $article)

        <div class="d-flex align-items-center border-bottom mb-3 pb-3">

            <img class="img-fluid" src="{{asset($article->image->path ?? '')}}" style="width: 80px; height: 80px;" alt="">

            <div class="d-flex flex-column pl-3">

                <a class="text-dark mb-2" href="{{request()->path}}{{$article->slug}}"> <b>{!! $article->title !!}</b><br>{!! mb_substr($article->content,0,70) . "..." !!}</a>

                <div class="d-flex">
                    <small class="mr-3"><i class="fa fa-user text-muted"></i>{{$article->author->name}}</small>
                    <small class="mr-3"><i class="fa fa-folder text-muted"></i>{{$article->category->name}}</small>
                    <small class="mr-3"><i class="fa fa-comments text-muted"></i>{{$article->comments->count()}}</small>
                </div>

            </div>

        </div>

        @endforeach

        <div class="d-flex align-items-center border-bottom mb-3 pb-3">

            <a class=" font-weight-bold mb-2" href="{{ request()->path }}">

                {{__('Читать все статьи')}}

            </a>

        </div>

    </div>
        <!--Свежие посты конец-->


    <!--Tags Start-->

    <div class="mb-5">

        <h3 class="mb-4">{{__('Теги')}}</h3>

        <div class="d-flex flex-wrap m-n1">

            @foreach ($tags as $tag)

            <a href="" class="btn btn-outline-primary m-1">

                {{$tag->name}}

            </a>

            @endforeach

        </div>

    </div>

    <!--Tags End-->

    <div class="mb-5">

        <img src="https://flexi.de/ru/flexi-ru/wp-content/uploads/2021/06/blog-hero.jpg" alt="" class="img-fluid">

    </div>

    <div>

        <h3 class="mb-4 text-dark">

            {{__('Питомец — это не просто домашнее животное.
        Другу, который дает нам так много, хочется отдать столько же. Именно поэтому в нашем блоге вы можете найти
        советы экспертов
        на любую тему о домашних животных, а также задать интересующие Вас вопросы в комментариях.')}}

        </h3>

    </div>

</div>


