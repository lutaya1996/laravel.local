@extends('layouts.base')

@section('content')

    <section>
        <!-- Contact Start -->

        <x-form.container>

            <div class="row justify-content-center">

                <div class="col-12 col-sm-8 mb-5">

                    <div class="form">

                        <div id="success">

                            <x-form.header>

                                <x-form.title>

                                    {{__('Остались вопросы?')}}

                                </x-form.title>


                                <x-slot name="second_title">

                                    Свяжитесь <span class="text-primary"> с нами</span>

                                </x-slot>

                            </x-form.header>

                            <x-form.body>

                                <x-form.index name="contacts" method="post" action="">


                                    <div class="control-group">

                                        <input type="email" class='form-control p-4 mb-3' name="email"
                                               value="{{$email ?? ""}}" placeholder="Ваш Email" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш email"
                                               autofocus/>

                                    </div>

                                    <div class="control-group">

                                        <input type="name" class='form-control p-4 mb-3' name="name"
                                               value="{{$name ?? ""}}" placeholder="Ваше имя" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваше имя"/>

                                    </div>

                                    <div class="control-group">

                                        <input type="telephone" class='form-control p-4 mb-3' name="telephone"
                                               value="{{$telephone ?? ""}}" placeholder="Ваш номер" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш контактный номер"/>

                                    </div>

                                    <div class="control-group">

                                    <textarea class="form-control p-4" rows="6" name="message" placeholder="Сообщение"
                                              required="required"
                                              data-validation-required-message="Пожалуйста, опишите Ваш вопрос"></textarea>

                                    </div>

                                    <div class="text-center">

                                        <x-form.button type="submit">

                                            {{__('Войти')}}

                                        </x-form.button>

                                    </div>

                                </x-form.index>

                            </x-form.body>

                        </div>

                    </div>

                </div>

            </div>

        </x-form.container>

    </section>

@endsection


