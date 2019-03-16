@extends('layouts.master')

@section('stylesheets')
    <link href="css/app.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet">
@stop
@section('content')

<div id="app">
    <app></app>
</div>

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@stop

@stop