<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>ようこそ、れんたろファンクラブへ!!</title>
  
      
      <link href="css/create.css" rel="stylesheet" type="text/css">
          
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    </head>
    <body>


@extends('layouts.app')

@section('content')

    <h1>君の名前を教えてね！</h1>
  {!! Form::open(['route' => ['friends.store', $friend->id], 'method' => 'post']) !!}
      
              お名前
              <input type="text" name = 'content' class="form-control">
    
  {!! Form::submit('ファンになりたい！',['class' => 'btn btn-success btn-xs']) !!}
    {!! Form::close() !!}

@endsection



    </body>
</html>