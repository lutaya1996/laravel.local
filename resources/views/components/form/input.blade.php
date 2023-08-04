@props(['value'=>'', ])


<input {{$attributes->class(['form-control

                 p-4 mb-3'])->merge([

                    'type' => 'text',

                    'value'=> request()->old($attributes->get('name')),

])->merge(['value'=> $value,

                            ]) }} >
