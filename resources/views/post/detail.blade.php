<!DOCTYPE html>
<html class="htm">
<head>
<title>詳細</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <link rel="stylesheet" href="./css/style2.css">
</head>
<body class="container bg-warning";>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="col-md-6 col-md-offset-3">
  <div class="h3">ラーメン屋の名前：：{{{ $post->ramen_name}}}</div>
  <div class="h3">住所：：{{{ $post->address }}}</div>
  <div class="h3">ラーメンの種類：：{{{ $post->kind }}}</div>
    <div class="h3">値段：：{{{ $post->price }}}円</div>
      <div class="h3">コメント：：{{{ $post->comment }}}</div>
  <div class="h3">投稿日：：{{{ $post->created_at }}}</div>
</div>
</body>
</html>
