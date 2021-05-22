<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\User;
use App\Movie;

class MoviesController extends Controller
{
    public function create()
    {
        $user = \Auth::user();
        $movies = $user->movies()->orderBy('id','desc')->paginate(9);
        
        $data = [
            'user' => $user,
            'movies' => $movies 
            ];
            
        return view('movies.create',$data);
        
    }
    
    public function store(MovieRequest $request)
    {
        $request->user()->movies()->create([
            'url' =>$request->url,
            'comment' => $request->comment,
            ]);
        
        return back();
    }
    
    public function destroy($id)
    {
        $movies = Movie::find($id);
        
        if(\Auth::id() == $movies->user_id){
            $movies->delete();
        }
        
        return back();
    }
}
