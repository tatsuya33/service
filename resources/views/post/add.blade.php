<!DOCTYPE html>
<html>
<head>
<title>Post</title>
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>
<body>

  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

{!! Form::open() !!}
    <div>
        ラーメン屋の名前:{!! Form::text('ramen_name', null) !!}
    </div>

    <div>
        住所:{!! Form::text('address', null) !!}
    </div>
    <div>
        ラーメンの種類:{!! Form::text('kind', null) !!}
    </div>
    <div>
        値段:{!! Form::text('price', null) !!}円
    </div>
    <div>
        コメント:{{ Form::textarea('comment',null) }}
    </div>
    <div>
        {!! Form::submit('登録') !!}
    </div>
{!! Form::close() !!}
</body>
</html>
