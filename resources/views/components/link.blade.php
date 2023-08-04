<div>

        <a {{$attributes->class(["font-weight-bold"],

            )->merge(['href'=> $href,

                       'style' => "font-size: large",         ])}} >

        {{$slot}}

    </a>

</div>
