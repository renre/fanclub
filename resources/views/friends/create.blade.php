@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($friend, ['route' => 'friends.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

{!! Form::label('level', 'レベル:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection
