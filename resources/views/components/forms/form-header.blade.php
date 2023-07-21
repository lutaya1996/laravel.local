<div class="d-flex flex-column text-center mb-3 pt-5">

    {{$slot}}

    @isset($second_title)

        <h4 class="display-4 m-0">

        {{$second_title}}

        </h4>

    @endisset

</div>
