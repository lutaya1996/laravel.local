
<div class="col-md-6 col-lg-4 mb-4">

    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">


        @isset($icon_class)

            <h3 {{ $attributes->class(['display-3 font-weight-normal text-secondary mb-3',

                                                                   $class ]) }}>

            </h3>


        @endisset


            @isset($title)

                <h3 class="mb-3">

                    {{$title}}

                </h3>

            @endisset


            @isset($description)

            <p>

            {{$description}}

            </p>

            @endisset


    </div>

</div>
