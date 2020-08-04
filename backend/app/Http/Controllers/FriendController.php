<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FriendRequest;
use App\User;

class FriendController extends Controller
{
    public function index()
  {

      $friends = \Auth::User()->friends()->get(); //ログインユーザ用
      //$friends = User::find(16547823)->friends()->get(); //test
      return view('friend/index', compact('friends'));
  }

  public function store(FriendRequest $request)
  {
      
      $user = \Auth::User();
      $user->friends()->attach($request->friend_id);

      return redirect('friend')->with('success', '新しい友達を登録しました');
      
  }

  public function delete(Request $request)
  {
      $user_id = \Auth::User()->id;

      $user = \Auth::User();
      $user->friends()->detach($request->friend_id);
      return redirect('friend')->with('success', '友達を削除しました');
      
  }

}
