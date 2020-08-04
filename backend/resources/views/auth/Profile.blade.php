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
    <link rel = "style"
    </head>
    <body>
        <div class="wrapper">

        <div style="margin-top: 30px;">
   
        <table class="table table-striped">  
        <tr>
        <th>Student ID</th>
        <td>{{ Auth::user()->id }}</td>
        </tr>  
        <tr>
        <th>Name</th>
        <td>{{ Auth::user()->name }}</td>
        </tr>  
        <tr>
        <th>Academic year</th>
        <td>{{ Auth::user()-> academic_year}}</td>
        </tr>
        <tr>
        <th>Faculty</th>
        <td>{{ Auth::user()->faculty }}</td>
        </tr>
        <tr>
        <th>Department</th>
        <td>{{ Auth::user()->department }}</td>
        </tr>
        </table>

        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>

@endsection