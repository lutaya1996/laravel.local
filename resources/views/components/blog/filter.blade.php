
<div class="container mb-5">

    <nav class="navbar navbar-expand-sm navbar-light bg-light">

        <ul class="navbar-nav">

            <li class="nav-item dropup">

                <a class="nav-link dropdown-toggle text-secondary" data-toggle="dropdown" href="#">

                    {{__('Категории')}}

                </a>

                <ul class="dropdown-menu">

                    @foreach($categories as $category)

                    <li><a class="dropdown-item {{request('category') == $category->name ? 'active' : '' }}"

                           href="{{route('blog.index', ['category'=>$category->name])}}"> {{$category->name}}</a></li>

                    @endforeach

                </ul>

            </li>

        </ul>

        <x-form.index action="{{route('blog.index', ['search'=>request('search')])}}" class="form-inline px-5">

            <input type="text" name="search" value="{{request('search')}}" class="form-control mr-sm-2" placeholder="Поиск"/>

            <input type="text" name="from_date" value="{{request('from_date')}}" class="form-control mr-sm-2" placeholder="Дата начала"/>

            <input type="text" name="to_date" value="{{request('to_date')}}" class="form-control mr-sm-2" placeholder="Дата окончания"/>

            <x-form.button type="submit " class="btn-sm mb-3 ml-3">

                {{__('Применить')}}

            </x-form.button>

        </x-form.index>

    </nav>



</div>
