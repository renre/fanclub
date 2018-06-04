@extends('layouts.app')

@section('content')

    <h1>id = {{ $friend->id }} のメッセージ詳細ページ</h1>

    <p>{{ $friend->content }}</p>
    <p>{{ $friend->level }}</p>
    {!! link_to_route('friends.edit', 'このメッセージを編集', ['id' => $friend->id]) !!}



    {!! Form::model($friend, ['route' => ['friends.destroy', $friend->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}


    
@endsection