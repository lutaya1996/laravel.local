<div class="container mt-5 pt-5 pb-3">

    <x-title class="text-center mb-5">

        <x-slot name="first_head">

            {{__('Наша команда')}}

        </x-slot>

        <x-slot name="second_head">

            {!! 'Встречайте наших <span class="text-primary">членов команды</span>' !!}

        </x-slot>

    </x-title>

    <div class="row">

        @foreach($team as $member )

            <div class="col-lg-3 col-md-6">

                <div class="team card position-relative overflow-hidden border-0 mb-4">

                    <x-card.img src="{{asset($member->image->path)}}" />

                    <x-card.body class="text-center p-0">

                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>{{$member->name}}</h5>
                            <i>{{$member->position}}</i>
                        </div>

                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0"
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>

                    </x-card.body>

                </div>

            </div>

        @endforeach

    </div>
</div>
