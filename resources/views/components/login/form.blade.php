<section>

    <x-forms.container>

        <div class="row justify-content-center">

            <div class="col-12 col-sm-8 mb-5">

                <div class="form">

                    <div id="success">

                        <x-forms.form-header>

                            <x-forms.form-title>

                                {{__('Авторизация')}}

                            </x-forms.form-title>

                        </x-forms.form-header>

                        <x-forms.form-body>

                            <x-forms.form name="login" method="post" action="{{route('login.store')}}">

                                <div class="control-group">

                                    <input type="email" class = 'form-control p-4 mb-3'  name="email"
                                           value="{{$email ?? ""}}" placeholder="Ваш Email" required="required"
                                           data-validation-required-message="Пожалуйста, введите Ваш email"
                                           autofocus/>

                                </div>

                                <div class="control-group">

                                    <input type="password" class = 'form-control p-4 mb-3' name="password"
                                           value="{{$password ?? ""}}" placeholder="Пароль" required="required"
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
