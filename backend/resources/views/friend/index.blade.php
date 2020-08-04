@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Friend List
                                      
                    @foreach($friends as $friend)
                        <li>{{$friend->name }} {{$friend->id}}

                        </li>
                    @endforeach
           
                </div>
            </div>
        </div>

        <form method="POST" action="/friend/add" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <input type="text" name="friend_id">
            <button type="submit" name=input > 登録</button>
        </form>
        <form method="POST" action="/friend/delete" enctype="multipart/form-data" >
             {{ csrf_field() }}
            <input type="text" name="friend_id">
            <button type="submit" name=output > 削除</button>
            <!-- <button type="submit" name= $friend_name ?> value=< $friend->id ?> >削除</button> -->
        </form>


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        
    </div>
</div>
@endsection