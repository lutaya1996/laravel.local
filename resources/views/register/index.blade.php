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

                                        <label for="name" style="color: red">*</label>

                                        <input type="name" class='form-control p-4 mb-3' name="name"
                                               value="{{$name ?? ""}}" placeholder="Ваше имя" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваше имя"
                                               autofocus/>

                                    </div>

                                    <div class="control-group">

                                        <label for="email" style="color: red">*</label>

                                        <input type="email" class='form-control p-4 mb-3' name="email"
                                               value="{{$email ?? ""}}" placeholder="Ваш Email" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш email"
                                               autofocus/>

                                    </div>

                                    <div class="control-group">

                                        <label for="password" style="color: red">*</label>

                                        <input type="password" class='form-control p-4 mb-3' name="password"
                                               value="{{$password ?? ""}}" placeholder="Пароль" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш пароль"/>

                                    </div>

                                    <div class="control-group">

                                        <label for="confirm" style="color: red">*</label>

                                        <input type="password" class='form-control p-4 mb-3' name="confirm"
                                               value="{{$confirm?? ""}}" placeholder="Подтвердите пароль"
                                               required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш пароль"/>

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
