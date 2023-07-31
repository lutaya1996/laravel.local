
<x-container>

    <div class="row py-5">

        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">

            <x-card.img src="https://bookingcat.ru/wp-content/uploads/2019/02/new-pic.png" />

        </div>

        <div class="col-lg-5">

            <div class="row px-3">

                <h4 class=" text-secondary mb-3">

                    {{__('Уезжаете в отпуск?')}}

                </h4>

                <h1 class="display-4 mb-4">

                    {!! 'Забронируйте номер в нашем отеле <span class="text-primary">для Вашего Питомца</span>' !!}

                </h1>

                <p>

                    {{__('Во время пребывания у нас Вашему Питомцу будет уделено самое пристальное внимание с высочайшим
                    качеством ухода.
                    Поскольку у нас небольшой список клиентов, мы можем предложить эту очень персонализированную
                    услугу каждому
                    клиенту и его четвероногому члену семьи.')}}

                </p>

                <a href="{{route('catalog')}}" class="btn btn-lg btn-primary mt-3 px-4">

                    {{__('Забронировать')}}

                </a>

            </div>

        </div>

    </div>

</x-container>
