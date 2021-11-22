@php
$titles=['recommande','favoris','top']
@endphp

@foreach($titles as $t)
    @include('elements.carou', ['title' => $t])
@endforeach






