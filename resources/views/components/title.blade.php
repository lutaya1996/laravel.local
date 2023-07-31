<div {{$attributes->class(['d-flex flex-column ',

            ]) }}>


        @isset($first_head)

        <h4 class="text-secondary mb-3">

            {{$first_head}}

        </h4>

        @endisset


        @isset($second_head)

        <h1 {{$attributes->class(["display-4 m-0",
                                        ]) }}>
            {{$second_head}}

        </h1>

        @endisset

            {{$slot}}

</div>
