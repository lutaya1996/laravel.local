@extends('layouts.layout')
@section('content')

    <!-- Register Form Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Регистрация</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <div id="success"></div>

                    <!--TODO  ACTION вынеси в вариаблс-->
                    <form method="post" action="">
                        @csrf
                        <?php if(isset($obj->warning)) :?>
                        <div class="alert alert-danger mb-3 py-4" role="alert">
                                <?php echo $obj->warning ?>
                        </div>
                        <?php endif;?>

                        <div class="control-group">
                            <span style="color:red">* Обязательные поля</span>
                        </div>
                        <div class="control-group">
                            <span style="color:red">*</span>
                            <input type="text" id="name" class="form-control p-4 mb-1" value="" name="name" placeholder="Ваше имя" required="required"/>
                            <label for="name" style="color:red" class="error"></label>
                            <label for="name" style="color:red" class="error"></label>
                            <label for="name" class="text">Используйте ТОЛЬКО латиницу или ТОЛЬКО кириллицу. Первая буква имени должна быть в верхнем регистре, а все остальные в нижнем.</label>
                        </div>
                        <div class="control-group">
                            <span style="color:red">*</span>
                            <input type="email" id="email" class="form-control p-4 mb-1" value="" name="email" placeholder="Ваш Email" required="required"/>
                            <label for="email" style="color:red" class="error"></label>
                            <label for="email" style="color:red" class="error"></label>
                            <label for="email" class="info">Укажите полный email</label>
                        </div>
                        <div class="control-group">
                            <span style="color:red">*</span>
                            <input type="password" id="password" class="form-control p-4 mb-1" value="" name="password" placeholder="Пароль" required="required"/>
                            <label for="password" style="color:red" class="error"></label>
                            <label for="password" style="color:red" class="error"></label>
                            <label for="password" class="info">Пароль должен состоять только из латинских символов и цифр, обязательно наличие 1 буквы, 1 цифры. Длина пароля от 8 до 12 символов.</label>
                        </div>
                        <div class="control-group">
                            <span style="color:red">*</span>
                            <input type="password" id="confirm-password" class="form-control p-4 mb-1" value="" name="confirm-password" placeholder="Повторите пароль" required="required"/>
                            <label for="confirm-password" style="color:red" class="error"></label>
                            <label for="confirm-password" style="color:red" class="error"></label>
                        </div>


                        <div class="text-center">
                            <button class="btn btn-primary py-3 px-5 mb-3 " type="submit"><span class="" >Зарегистрироваться</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Register Form End -->

@stop
