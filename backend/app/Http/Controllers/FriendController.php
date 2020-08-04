<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\FriendRequest;
use App\User;

class FriendController extends Controller
{
    public function index(){
      $friends = \Auth::User()->friends()->get(); //ログインユーザ用
      //$friends = User::find(16547823)->friends()->get(); //test
      return view('friend/index', compact('friends'));
    }

  public function store(FriendRequest $request)
  {
      
      $user = \Auth::User();
      $user->friends()->attach($request->friend_id, ['type' => 'frined']);

      return redirect('friend')->with('success', '新しい友達を登録しました');
      
  }

  public function type()
  {
    $user = \Auth::User();

    if (Request::has('delete')) {
        $friend_id = Request::input('delete');
        $user->friends()->detach($friend_id);
        return redirect('friend')->with('success', '友達を削除しました');
    }elseif (Request::has('mute')) {
        $user->friends()->update(['type' => 'mute']);
        return redirect('friend')->with('success', '友達をミュートしました');
    }elseif (Request::has('block')) {
        $user->friends()->update(['type' => 'block']);
        return redirect('friend')->with('success', '友達をブロックしました');
    }elseif (Request::has('free')) {
        $user->friends()->update(['type' => 'friend']);
        return redirect('friend')->with('success', 'ミュート/ブロックを解除しました');
    }
  }
}