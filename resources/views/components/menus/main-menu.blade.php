
<div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
    <div class="navbar-nav mr-auto py-0">

        <a href = '{{route('home')}}'  class="nav-item nav-link active">Главная</a>
        <a href = '{{route('catalog')}}' class="nav-item nav-link">Услуги и цены </a>
        <a href = '{{route('contacts')}}'  class="nav-item nav-link ">Контакты</a>
        <a href = '{{route('blog.index')}}' class="nav-item nav-link">Наш блог </a>
    </div>


    <div class="navbar-nav mr-auto py-0">
        <a href="{{route('login')}}"
           class="nav-item nav-link " >Авторизация</a>
        <a href="{{route('register')}}" class="nav-item nav-link" >Регистрация</a>
    </div>

    <div class="navbar-nav mr-auto py-0">
        <a href="/logout" class="nav-item nav-link ">Выйти</a>
    </div>

</div>
