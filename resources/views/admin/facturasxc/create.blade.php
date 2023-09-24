@extends('adminlte::page')


@section('title', 'Sistema GECO')

@section('content')
    @livewire('admin.facturasxc.facturasxc-create')
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop