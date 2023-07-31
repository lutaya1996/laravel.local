<section>

    <x-form.container>

        <div class="row justify-content-center">

            <div class="col-12 col-sm-8 mb-5">

                <div class="form">

                    <div id="success">

                        <x-form.header>

                            <x-form.title>

                                {{__('Авторизация')}}

                            </x-form.title>

                        </x-form.header>

                        <x-form.body>

                            <x-form.index name="login" method="post" action="{{route('login.store')}}">

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
