@extends('layouts.base')

@section('content')

    <!-- Register Form Start -->

    <section>

        <x-form.container>

            <div class="row justify-content-center">

                <div class="col-12 col-sm-8 mb-5">

                    <div class="form">

                        <div id="success">

                            <x-form.header>

                                <x-form.title>

                                    {{__('Регистрация')}}

                                </x-form.title>

                            </x-form.header>

                            <x-form.body>

                                <x-form.index name="register" method="post" action="{{route('register.store')}}">

                                    <div class="control-group">

                                        <x-form.label for="name" class="required">{{__('Ваше имя')}}</x-form.label>

                                        <x-form.input type="name"  name="name"

                                               :value

                                               data-validation-required-message="Пожалуйста, введите Ваше имя"

                                               autofocus/>

                                    </div>

                                    <x-form.item>

                                        <x-form.label for="email" class="required">{{__('Ваш Email')}}</x-form.label>

                                        <x-form.input type="email"  name="email"

                                               :value

                                               data-validation-required-message="Пожалуйста, введите Ваш email"/>

                                    </x-form.item>

                                    <x-form.item>

                                        <x-form.label for="password" class="required">{{__('Пароль')}}</x-form.label>

                                        <x-form.input type="password"  name="password"

                                               :value

                                               data-validation-required-message="Пожалуйста, введите Ваш пароль"/>

                                    </x-form.item>

                                    <x-form.item>

                                        <x-form.label for="confirm" class="required">{{__('Подтвердите пароль')}}</x-form.label>

                                        <x-form.input type="password"  name="confirm"

                                               :value

                                               data-validation-required-message="Пожалуйста, введите Ваш пароль"/>

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
