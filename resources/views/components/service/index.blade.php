<div class="container-fluid bg-light pt-5">

    <x-container>

        <x-title class="text-center mb-5">

            <x-slot name="first_head">Что мы предлагаем</x-slot>

            <x-slot name="second_head"><span class="text-primary">Премиальный</span> Сервис для Питомцев</x-slot>

        </x-title>


        <div class="row pb-3">

            @foreach ($services as $service)

                <x-service.card>

                    <x-slot name="icon_class"  :class = "$service->icon_class"/>

                    <x-slot name="title">{{$service->title}}</x-slot>

                    <x-slot name="description">{{$service->description}}</x-slot>

                </x-service.card>

            @endforeach

        </div>

    </x-container>

</div>
