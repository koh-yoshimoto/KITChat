@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Plofile') }}</div>
                <div class="card-body">
                    <div style="margin-top: 30px;">
                        <ul class="list-group">
                            <li class="list-group-item">{{Auth::user()->id}} </li>
                            <li class="list-group-item">{{ Auth::user()->name }}</li>
                            <li class="list-group-item">{{ Auth::user()-> academic_year}}</li>
                            <li class="list-group-item">{{ Auth::user()->faculty }}</li>
                            <li class="list-group-item">{{ Auth::user()->department }}</li>
                        </ul>
                        <a class="btn btn-primary" href="/" role="button">TimeLine</a>
                        <a class="btn btn-primary" href="/friend" role="button">Friend</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection