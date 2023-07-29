
<div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
    <div class="navbar-nav mr-auto py-0">

        <a href = '{{route('home')}}'  class="nav-item nav-link {{active_link('home')}}">Главная</a>
        <a href = '{{route('catalog')}}' class="nav-item nav-link {{active_link('catalog')}}">Услуги и цены </a>
        <a href = '{{route('contacts')}}'  class="nav-item nav-link {{active_link('contacts')}}">Контакты</a>
        <a href = '{{route('blog.index')}}' class="nav-item nav-link {{active_link('blog*')}}">Наш блог </a>
    </div>


    <div class="navbar-nav mr-auto py-0">
        <a href="{{route('login')}}"
           class="nav-item nav-link {{active_link('login')}}" >Авторизация</a>
        <a href="{{route('register')}}"
           class="nav-item nav-link {{active_link('register')}}" >Регистрация</a>
    </div>

    <div class="navbar-nav mr-auto py-0">
        <a href="/logout" class="nav-item nav-link ">Выйти</a>
    </div>

</div>
