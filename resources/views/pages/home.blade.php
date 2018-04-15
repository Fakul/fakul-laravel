@extends('layouts.master')

@section('stylesheet')
    <link href="main.css" />
@stop

@section('content')

<div id="app">
    <app></app>
</div>

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@stop

@stop