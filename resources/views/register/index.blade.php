@extends('layouts.layout')
@section('content')

    <!-- Register Form Start -->
    <section>

        <x-forms.container>

            <div class="row justify-content-center">

                <div class="col-12 col-sm-8 mb-5">

                    <div class="form">

                        <div id="success">

                            <x-forms.form-header>

                                <x-forms.form-title>

                                    {{__('Регистрация')}}

                                </x-forms.form-title>

                            </x-forms.form-header>

                            <x-forms.form-body>

                                <x-forms.form name="register" method="post" action="{{route('register.store')}}">

                                    <div class="control-group">

                                        <label for="name" style="color: red">*</label>

                                        <input type="name" class = 'form-control p-4 mb-3'  name="name"
                                               value="{{$name ?? ""}}" placeholder="Ваше имя" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваше имя"
                                               autofocus/>

                                    </div>

                                    <div class="control-group">

                                        <label for="email" style="color: red">*</label>

                                        <input type="email" class = 'form-control p-4 mb-3'  name="email"
                                               value="{{$email ?? ""}}" placeholder="Ваш Email" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш email"
                                               autofocus/>

                                    </div>

                                    <div class="control-group">

                                        <label for="password" style="color: red">*</label>

                                        <input type="password" class = 'form-control p-4 mb-3' name="password"
                                               value="{{$password ?? ""}}" placeholder="Пароль" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш пароль"/>

                                    </div>

                                    <div class="control-group">

                                        <label for="confirm" style="color: red">*</label>

                                        <input type="password" class = 'form-control p-4 mb-3' name="confirm"
                                               value="{{$confirm?? ""}}" placeholder="Подтвердите пароль" required="required"
                                               data-validation-required-message="Пожалуйста, введите Ваш пароль"/>

                                    </div>

                                    <div class="text-center">

                                        <x-forms.button type="submit">

                                            {{__('Войти')}}

                                        </x-forms.button>

                                    </div>

                                </x-forms.form>

                            </x-forms.form-body>

                        </div>

                    </div>

                </div>

            </div>

        </x-forms.container>

    </section>

@endsection
