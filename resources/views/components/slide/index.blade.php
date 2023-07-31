<x-carousel.container>

    <x-carousel.header>

        <x-carousel.inner>

            @foreach($slides as $slide)

                <div class="carousel-item {{$slide->show_on_first ? 'active' : ''}}">

                    <img class="w-100" src="{{$slide->image->path}}" alt="Image">

                    <x-carousel.text>

                        <x-slot name="first_head">

                            {{$slide->first_head}}

                        </x-slot>

                        <x-slot name="second_head">

                            {{$slide->second_head}}

                        </x-slot>

                    </x-carousel.text>

                </div>

            @endforeach

        </x-carousel.inner>

        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>

    </x-carousel.header>

</x-carousel.container>
