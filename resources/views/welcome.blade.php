@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-warning">
        
        <div class="text-center text-white">
            <h1>YouTubeまとめ　× SNS</h1>
        </div>
    </div>    
    
    @if(session('user_delete'))
        <div class="alert alert-info">
            {{ session('user_delete') }}
        </div>
    @endif
    
        
    @if(session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
    @endif
        
    <div class="text-right">
        
        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif
        
    </div>
        
    @include('users.users',['users'=>$users])
    
@endsection