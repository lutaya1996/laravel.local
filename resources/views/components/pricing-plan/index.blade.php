<div class="container-fluid bg-light pt-5 pb-4">

    <x-container>

        <x-title class="text-center mb-5">

            <x-slot name="first_head">Наши цены</x-slot>

            <x-slot name="second_head">Выберите <span class="text-primary">лучший</span>  тариф</x-slot>

        </x-title>

        <div class="row">

            <x-card.index>

                <x-card.border>

                    <x-card.header>

                        <x-card.img src="{{asset('img/price-1.jpg')}}"/>

                        <div
                            class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100"
                            style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 class="text-primary mb-3">Базовый</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                            </h1>
                        </div>

                    </x-card.header>


                    <x-card.body class="text-center p-0">

                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Кормление
                            </li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Содержание
                            </li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Грумминг и СПА
                            </li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Ветеринарная
                                помощь
                            </li>
                        </ul>

                    </x-card.body>


                    <x-card.footer>

                        <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Выбрать</a>

                    </x-card.footer>

                </x-card.border>

            </x-card.index>


            <x-card.index>

                <x-card.header>

                    <x-card.img src="{{asset('img/price-2.jpg')}}" />

                    <div
                        class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100"
                        style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                        <h3 class="text-secondary mb-3">Стандарт</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                        </h1>
                    </div>

                </x-card.header>


                <x-card.body class="text-center p-0">

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Кормление</li>
                        <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Содержание</li>
                        <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Грумминг и СПА
                        </li>
                        <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Ветеринарная помощи
                        </li>
                    </ul>

                </x-card.body>


                <x-card.footer>

                    <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Выбрать</a>

                </x-card.footer>


            </x-card.index>


            <x-card.index>

                <x-card.header>

                    <x-card.img src="{{asset('img/price-3.jpg')}}" />

                    <div
                        class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100"
                        style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                        <h3 class="text-primary mb-3">Премиум</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                        </h1>
                    </div>

                </x-card.header>


                <x-card.body class="text-center p-0">

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Кормление</li>
                        <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Содержание</li>
                        <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Груминг и СПА
                        </li>
                        <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Ветеринарная
                            помощь
                        </li>
                    </ul>

                </x-card.body>


                <x-card.footer>

                    <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Выбрать</a>

                </x-card.footer>


            </x-card.index>


        </div>

    </x-container>

</div>
