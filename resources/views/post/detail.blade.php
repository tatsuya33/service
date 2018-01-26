<!DOCTYPE html>
<html>
<head>
<title>Post</title>
</head>
<body>
<div>
  <div>{{{ $post->ramen_name}}}</div>
  <div>{{{ $post->address }}}</div>
  <div>{{{ $post->kind }}}</div>
    <div>{{{ $post->price }}}円</div>
      <div>{{{ $post->comment }}}</div>
  <div>{{{ $post->created_at }}}</div>
  <div>{{{ $post->updated_at }}}</div>
</div>
</body>
</html>
