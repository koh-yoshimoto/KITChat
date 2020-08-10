<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\FriendRequest;
use App\User;
use Exception;

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
      try {
        if ($user->where('id', $request->friend_id)->exists()) {
          $user->friends()->attach($request->friend_id, ['type' => 'frined']);
        } else {
          return redirect('friend')->with('error', '存在しないIDです');
        }
      }catch (Exception $e) {
        return redirect('friend')->with('error', 'すでに登録されています');
      }

      return redirect('friend')->with('success', '新しい友達を登録しました');

  }

  public function delete(FriendRequest $request)
  {

      $user = \Auth::User();
      $user->friends()->detach($request->friend_id);

      return redirect('friend')->with('success', '友達を削除しました');

  }

  public function type()
  {
    $user = \Auth::User();

    if (Request::has('delete')) {
        $friend_id = Request::input('delete');
        $user->friends()->detach($friend_id);
        return redirect('friend')->with('success', '友達を削除しました');
    }elseif (Request::has('mute')) {
        $friend_id = Request::input('mute');
        $user->friends()->where('friend_id', $friend_id)->update(['type' => 'mute']);
        return redirect('friend')->with('success', '友達をミュートしました');
    }elseif (Request::has('block')) {
      $friend_id = Request::input('block');
        $user->friends()->where('friend_id', $friend_id)->update(['type' => 'block']);
        return redirect('friend')->with('success', '友達をブロックしました');
    }elseif (Request::has('free')) {
        $friend_id = Request::input('free');
        $user->friends()->where('friend_id', $friend_id)->update(['type' => 'friend']);
        return redirect('friend')->with('success', 'ミュート/ブロックを解除しました');
    }
  }
}