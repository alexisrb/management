@extends('adminlte::page')


@section('title', 'Sistema GECO')

@section('content')
    @livewire('admin.construction-site.construction-site-create')
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop