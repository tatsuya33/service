<!DOCTYPE html>
<html >
<head>
<title>Post</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>関東のラーメン屋 投稿フォーム</h1>
<div><a href="/post/add">投稿</a></div>

{!! Form::open(['method' => 'GET']) !!}
    ラーメン屋の名前:{!! Form::text('ramen_name', $ramen_name) !!}
    詳しい住所     :{!! Form::text('address', $address) !!}
    種類:{!! Form::text('kind', $kind) !!}
    {!! Form::submit('検索') !!}
{!! Form::close() !!}
<hr>
@foreach($posts as $post)
<div >
    <div>{{{ $post->ramen_name}}}</div>
    <div>{{{ $post->address }}}</div>
    <div>{{{ $post->kind }}}</div>
      <div>{{{ $post->price }}}</div>
        <div>{{{ $post->comment }}}</div>

    <div><a href="/post/detail/{{{ $post->id }}}">詳細</a>
</div>
<hr>
@endforeach
</body>
</html>
