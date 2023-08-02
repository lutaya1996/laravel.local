@props(['value'=>'', ])


<input {{$attributes->class(['form-control

                 p-4 mb-3'])->merge([

                    'type' => 'text',

])->merge(['value'=> $value,

                            ]) }} >
