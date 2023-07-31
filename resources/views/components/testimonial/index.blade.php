<x-carousel.container class="bg-light my-5 py-5">

    <x-container class="p-0">

        <div class="d-flex flex-column text-center mb-5">

            <h4 class="text-secondary mb-3">{{__('Отзывы')}}</h4>

            <h1 class="display-4 m-0">{!! 'Отзывы <span class="text-primary">наших клиентов</span>' !!}</h1>

        </div>

        <div class="owl-carousel testimonial-carousel">

            @foreach($testimonials as $testimonial)

                <div class="bg-white mx-3 p-4">

                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">

                        <img class="img-fluid" src="{{asset($testimonial->image->path)}}"

                             style="width: 80px; height: 80px;" alt="">

                        <div class="ml-3">

                            <h5>{{$testimonial->name}}</h5>

                            <i>{{$testimonial->profession}}</i>

                        </div>

                    </div>

                    <p class="m-0">{{$testimonial->text}}</p>

                </div>

            @endforeach

        </div>

    </x-container>

</x-carousel.container>
