@extends('layouts.app')

@section('content')

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>プロフィール</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="wrapper">

        <div style="margin-top: 30px;">
        <ul class="list-group">
        <li class="list-group-item">{{Auth::user()->id}} </li>
        <li class="list-group-item">{{ Auth::user()->name }}</li>
        <li class="list-group-item">{{ Auth::user()-> academic_year}}</li>
        <li class="list-group-item">{{ Auth::user()->faculty }}</li>
        <li class="list-group-item">{{ Auth::user()->department }}</li>
        </ul>

        <a class="btn btn-primary" href="/timeline" role="button">TimeLine</a>
        <a class="btn btn-primary" href="/friend" role="button">Friend</a>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

@endsection