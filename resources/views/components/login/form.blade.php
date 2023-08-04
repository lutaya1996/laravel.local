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

                                <x-form.item>

                                    <x-form.input type="email" name="email"

                                                  placeholder="Ваш Email"

                                                  data-validation-required-message="Пожалуйста, введите Ваш email"

                                                  autofocus/>

                                </x-form.item>

                                <x-form.item>

                                    <x-form.input type="password" name="password"

                                                  placeholder="Пароль"

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
