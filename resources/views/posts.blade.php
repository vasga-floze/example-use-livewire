<!--Que extienda de la plantilla creada, layout-->
@extends('layout')


<!--Que dentro de la seccion esta, exista la informacion que voy a presentar-->
@section('content')

<div class="container">
    @livewire('post-component')
</div>

@endsection