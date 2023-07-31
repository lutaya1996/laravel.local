<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

    <div class="p-3" style="max-width: 900px;">

        @isset($first_head)

            <h3 class="text-white mb-3 d-none d-sm-block">

                {{$first_head}}

            </h3>

        @endisset

        @isset($second_head)

            <h1 class="display-3 text-white mb-3">

                {{$second_head}}

            </h1>

        @endisset

    </div>

</div>
