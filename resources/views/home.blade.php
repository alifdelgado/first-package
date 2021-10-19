@extends('first-package::layout')

@section('content')
    <h1>Vista del paquete</h1>
    <p>{{ $message }}</p>
    <p>Traducciones: {{ trans('first-package::message.welcome') }}</p>
@endsection