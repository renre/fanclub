
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

    <h1>会員番号: {{ $friend->id }}番の名前編集ページ</h1>

    {!! Form::model($friend, ['route' => ['friends.update', $friend->id], 'method' => 'put']) !!}

         お名前
              <input type="text" name = 'content' class="form-control">
    

        {!! Form::submit('更新',['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

@endsection

</body>
</html>