<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    $users = User::orderBy('id','desc')->paginate(9);
    
    return view('welcome',[
        'users' => $users,    
    ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $movies = $user->movies()->orderBy('id','desc')->paginate(9);
        
        $data = [
            'user' => $user,
            'movies' => $movies,
            ];
            
        $data += $this->counts($user);

        
        return view('users.show',$data);
    }
    
    public function rename(UserRequest $request)
    {
        $user=\Auth::user();
        $movies = $user->movies()->orderBy('id','desc')->paginate(9);
        
        $user->channel = $request->channel;
        $user->name = $request->name;
        $user->save();
        
        $data = [
            'user' => $user,
            'movies' => $movies,
            ];
            
        $data += $this->counts($user);
        
        return view('users.show',$data);
    }
    
    public  function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(9);
        
        $data = [
            'user' => $user,
            'users' => $followings,
        ];
        
        $data += $this->counts($user);
        
        return view('users.followings', $data);
    }
    
    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(9);
        
        $data = [
            'user' => $user,
            'users' => $followers,
        ];
        
        $data += $this->counts($user);
        
        return view('users.followers',$data);
    }
    
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/')
            ->with('user_delete','退会処理が終了しました');
    }
    
    public function delete_confirm()
    {
        return view('users.delete_confirm');
    }
}
