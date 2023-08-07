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

                                    <x-form.item>

                                        <x-form.label for="name" class="required">{{__('Ваше имя')}}</x-form.label>

                                        <x-form.input type="name"  name="name"

                                               autofocus/>

                                        <x-error name="name"/>

                                    </x-form.item>

                                    <x-form.item>

                                        <x-form.label for="email" class="required">{{__('Ваш Email')}}</x-form.label>

                                        <x-form.input type="email"  name="email"/>

                                        <x-error name="email"/>

                                    </x-form.item>

                                    <x-form.item>

                                        <x-form.label for="password" class="required">{{__('Пароль')}}</x-form.label>

                                        <x-form.input type="password"  name="password"/>

                                        <x-error name="password"/>

                                    </x-form.item>

                                    <x-form.item>

                                        <x-form.label for="password_confirmation" class="required">{{__('Подтвердите пароль')}}</x-form.label>

                                        <x-form.input type="password"  name="password_confirmation"/>

                                        <x-error name="password_confirmation"/>

                                    </x-form.item>

                                    <div class="text-center">

                                        <x-form.button type="submit">

                                            {{__('Зарегистрироваться')}}

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
