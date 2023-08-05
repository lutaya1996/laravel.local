@props(['name'=>'', ])


@error($name)

    <div class="alert alert-danger mt-0 p-2">

        {{ $message }}

    </div>

@enderror
