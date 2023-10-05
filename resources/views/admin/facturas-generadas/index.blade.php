@extends('adminlte::page')


@section('title', 'Sistema GECO')

@section('content')
    @livewire('admin.facturas-generadas.facturas-generadas-index')
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop