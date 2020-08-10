@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/button.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Friend List</div>

                <div class="card-body">
                    @foreach($friends as $friend)
                        <li>{{$friend->name }} {{$friend->id}}
                        <form method="POST" action="/friend/type" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <button type="submit" name="mute" value=<?=$friend->id?> class="btn btn--blue" >ミュート</button>
                            <button type="submit" name="block" value=<?=$friend->id?>  class="btn btn--blue" >ブロック</button>
                            <button type="submit" name="free" value=<?=$friend->id?>  class="btn btn--blue" >解除</button>
                            <button type="submit" name="delete" value=<?=$friend->id?> class="btn btn--blue" >削除</button>
                        </form>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>

        <div>
        <form method="POST" action="/friend/add" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <button type="submit" name=register class="btn btn--orange"> 登録</button>
            <div class="cp_iptxt">
                <input type="text" placeholder="登録ID" name="friend_id">
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>
        </form>
        <form method="POST" action="/friend/delete" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <button type="submit" name=delete class="btn btn--blue"> 削除</button>
            <div class="cp_iptxt">
                <input type="text" placeholder="削除ID" name="friend_id">
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>

            </div>
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
</div>
@endsection