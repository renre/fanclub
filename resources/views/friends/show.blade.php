
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>ようこそ、れんたろファンクラブへ!!</title>
  
      
      <link href="css/rakuraku.css" rel="stylesheet" type="text/css">
          
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    </head>

<body>

@extends('layouts.app')

@section('content')

    <h1>会員番号 {{ $friend->id }} 番の会員専用ページ</h1>

      <table class="table table-bordered">

 <tr>
     <th>会員番号</th>
     <td>{{ $friend->id }}</td>
 </tr>
 <tr>
     <th>名前</th>
     <td>{{ $friend->content }}</td>
 </tr>
</table>
    
    {!! link_to_route('friends.edit', '名前を変更する', ['id' => $friend->id],['class' => 'btn btn-success']) !!}



    {!! Form::model($friend, ['route' => ['friends.destroy', $friend->id], 'method' => 'delete']) !!}
        {!! Form::submit('ファンをやめる…',['class' => 'btn btn-warning']) !!}
    {!! Form::close() !!}


    
@endsection


    </body>
</html>