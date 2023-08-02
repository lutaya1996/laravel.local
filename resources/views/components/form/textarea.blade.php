
<textarea {{$attributes->class(['form-control p-4',])->merge([

                                   'rows'=>'6',
                                   'name'=>'message',
                                              ]) }} >
    {{$slot}}
</textarea>

