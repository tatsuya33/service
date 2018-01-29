<!DOCTYPE html>
<html class="html">
<head>
<title>ラーメン</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body class="container">
  <h1 class="h1 hth">関東のラーメン屋 投稿フォーム</h1>
<div class="h1 hh"><a href="/post/add">投稿</a></div>
<br>
  <br>
  <br>
<div class= 'h4 '>
{!! Form::open(['method' => 'GET']) !!}
    ラーメン屋の名前:{!! Form::text('ramen_name', $ramen_name,['class' => '']) !!}
    詳しい住所     :{!! Form::text('address', $address) !!}
    種類:{!! Form::text('kind', $kind) !!}
    {!! Form::submit('検索') !!}
{!! Form::close() !!}
</div>
<hr class="">
@foreach($posts as $post)
    <div class="">
    <div class="h4">ラーメン屋の名前：：{{{ $post->ramen_name}}}</div>
    <div class="h4">住所：：{{{ $post->address }}}</div>
    <div class="h4">ラーメンの種類：：{{{ $post->kind }}}</div>
      <div class="h4">値段：：{{{ $post->price }}}円</div>
        <div class="h4 pull-right"><a href="/post/detail/{{{ $post->id }}}">詳細</a></div>
        <div class="h4">コメント：：{{{ $post->comment }}}</div>


</div>
<hr >
@endforeach
<br>
    <div class="pager ">
        @foreach ($posts as $post)
            {{ $post->name }}
        @endforeach
    </div>

{{ $posts->links() }}
</body>
</html>
