@extends('layouts.app')

@section('content')

    <h1>id: {{ $friend->id }} のメッセージ編集ページ</h1>

    {!! Form::model($friend, ['route' => ['friends.update', $friend->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

   {!! Form::label('level', 'レベル:') !!}
        {!! Form::text('level') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection