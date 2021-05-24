@extends('layouts.app')

@section('content')

        @include('users.tabs',['user'=>$user])
        
        @include('movies.movies',['movies' => $movies])

@if(Auth::id() == $user->id)

        <h3 class="mt-5">表示目の変更</h3>
        
        <div class="row mt-5 mb-5">
                <div class="col-sm-6">
                        
                        {!! Form::open(['route' => 'rename','method'=>'put']) !!}
                                <div class="form-group">
                                        {!! Form::label('channel','チャンネル名') !!}
                                        {!! Form::text('channel',$user->channel,['class'=>'form-control']) !!}
                                </div>
                                <p class="text-danger">{{ $errors->first('channel') }}</p>
                                
                                <div class="form-group">
                                        {!! Form::label('name','名前') !!}
                                        {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
                                </div>
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                
                                {!! Form::submit('更新する？',['class'=>'button btn btn-primary mt-2']) !!}
                        {!! Form::close() !!}
                        
                </div>
        </div>
        
@endif
        <div>
                @if(Auth::check())
                        <a href="{{route('users.delete_confirm')}}">退会はこちらから</a>
                @endif
        </div>
        
        <div>
                @if(Auth::check())
                        <a href="{{route('password.form')}}">パスワードの変更はこちらから</a>
                @endif
        </div>

@endsection
