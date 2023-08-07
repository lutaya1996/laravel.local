<button {{ $attributes->class([

    'btn btn-primary py-2 px-5 mt-3',

    ])->merge([

    'type' => 'button',


]) }}>

    {{$slot}}

</button>
