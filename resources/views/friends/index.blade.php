@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($friends) > 0)
        <ul>
            @foreach ($friends as $friend)
                <li>{{ $friend->content }}</li>
                  <li>{{ $friend->level }}</li>
            @endforeach
        </ul>
    @endif
{!! link_to_route('friends.create', '新規メッセージの投稿') !!}
@endsection