@if( $alert = session()->pull('alert'))

<div class="alert alert-success text-center">

    {{ $alert }}

</div>

@endif
