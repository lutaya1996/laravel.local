<div>

        <a {{$attributes->class(["font-weight-bold"],

            )->merge(['href'=> $href,

                                    ])}} >

        {{$slot}}

    </a>

</div>
