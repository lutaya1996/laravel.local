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


                                    <x-form.item>

                                        <x-form.input type="email" name="email"

                                               :value placeholder="Ваш Email"

                                               data-validation-required-message="Пожалуйста, введите Ваш email"

                                               autofocus/>

                                    </x-form.item>

                                    <x-form.item>

                                        <x-form.input type="name"  name="name"

                                               :value placeholder="Ваше имя"

                                               data-validation-required-message="Пожалуйста, введите Ваше имя"/>

                                    </x-form.item>

                                    <x-form.item>

                                        <x-form.input type="telephone"  name="telephone"

                                               :value placeholder="Ваш номер"

                                               data-validation-required-message="Пожалуйста, введите Ваш контактный номер"/>

                                    </x-form.item>

                                    <x-form.item>

                                    <x-form.textarea  name="message"

                                              data-validation-required-message="Пожалуйста, опишите Ваш вопрос">

                                    </x-form.textarea>

                                    </x-form.item>

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


