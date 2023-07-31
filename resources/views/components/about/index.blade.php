<x-container>

    <div class="row py-5">

        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">

            <h4 class="text-secondary mb-3">

                {{__('О нас')}}

            </h4>

            <h1 class="display-4 mb-4">

                    <span class="text-primary">
                        {{__('Содержание')}}</span> & <span class="text-secondary">{{__('Дневной уход')}}</span>

            </h1>

            <h5 class="text-muted mb-3">

                {{__('Мы оказываем комплексные услуги вашим домашним любимцам: собакам и кошкам.')}}

            </h5>

            <p class="mb-4">

                {{__('Мы можем предложить Вашим питомцам высококвалифицированную круглосуточную ветеринарную
                помощь, услуги по осуществлению стильных и гигиенических стрижек собак и кошек.')}}

            </p>

            <ul class="list-inline">

                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>{{__('Лучшие в индустрии')}}</h5>
                </li>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>{{__('Экстренные службы помощи')}}</h5>
                </li>
                <li>
                    <h5><i class="fa fa-check-double text-secondary mr-3"></i>{{__('Поддержка клиентов 24/7')}}</h5>
                </li>

            </ul>

            <a href="{{route('catalog')}}" class="btn btn-lg btn-primary mt-3 px-4">

                {{__('Узнать больше')}}

            </a>

        </div>

        <div class="col-lg-5">

            <div class="row px-3">

                <div class="col-12 p-0">

                    <img class="img-fluid w-100" src="{{asset('img/about-1.jpg')}}" alt="">

                </div>

                <div class="col-6 p-0">

                    <img class="img-fluid w-100" src="{{asset('img/about-2.jpg')}}" alt="">

                </div>

                <div class="col-6 p-0">

                    <img class="img-fluid w-100" src="{{asset('img/about-3.jpg')}}" alt="">

                </div>

            </div>

        </div>

    </div>

</x-container>
