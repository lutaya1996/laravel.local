@if( $alert = session()->pull('alert'))

<div class="alert alert-{{ $type }} text-center">

    {{ $alert }}

</div>

@endif
