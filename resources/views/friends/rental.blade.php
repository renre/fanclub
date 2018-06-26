<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>ようこそ、れんたろファンクラブへ!!</title>
         <link rel="stylesheet" href="rental.css">
    </head>


<body>

@extends('layouts.app')

@section('content')

<p> これらの商品を提供します！</p>


  
<table class="table table-striped table-bordered">
    <tr>
        
        <th class="col-sm-offset-2 col-sm-5 text-center">用具名</th>
        <th class="col-sm-5 text-center">料金</th>
    </tr>
    <tr>
        <td class="col-sm-offset-2 col-sm-5 text-center">布団</td>
        <td class="col-sm-5 text-center">1000</td>
    </tr>
    <tr>
        <td class="col-sm-offset-2 col-sm-5 text-center">枕</td>
        <td class="col-sm-5 text-center">500</td>
    </tr>
    <tr>
        <td class="col-sm-offset-2 col-sm-5 text-center">ゲーム</td>
        <td class="col-sm-5 text-center">300</td>
    </tr>
</table>
@endsection

</body>

</html>