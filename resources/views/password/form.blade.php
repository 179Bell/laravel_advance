@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-warning">
        <div class="text-center text-white">
            <h1>YouTubeまとめ × SNS</h1>
        </div>
        
        <div class="text-center">
            <h3 class="login_title text-left d-inline-block mt-5">パスワードの変更</h3>
        </div>
    </div>    
        
    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route'=>'password.change']) !!}
                <div class="form-group">
                    {!! Form::label('email','以前のパスワード') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('password','新しいパスワード') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password','パスワードの確認') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                
                {!! Form::submit('パスワードを変更する',['class'=>'btn btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
    
    
@endsection
