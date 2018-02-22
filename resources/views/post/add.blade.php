<!DOCTYPE html>
<html>
<head>
<title>投稿</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body class="container bg-warning">

  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <br>
  <br>
  <br>
 <div class="col-md-6 col-md-offset-3">
{!! Form::open() !!}
    <div class="form-group-lg h4">
        {!! Form::label('ramen_name', 'ラーメン屋の名前') !!}
        {!! Form::text('ramen_name', null,['class' => 'form-control']) !!}<br>
    </div>

    <div class="form-group-lg h4">
        {!! Form::label('address', '住所') !!}
        {!! Form::text('address', null,['class' => 'form-control']) !!}<br>
    </div>
    <div class="form-group-lg h4">
        {!! Form::label('kind', 'ラーメンの種類') !!}
        {!! Form::text('kind', null,['class' => 'form-control']) !!}<br>
    </div>
    <div class="form-group-lg h4">
        {!! Form::label('price', '値段') !!}
        {!! Form::text('price', null,['class' => 'form-control']) !!}<br>
    </div>
    <div class="form-group-lg h4">
        {!! Form::label('comment', 'コメント(500文字まで入力可能)') !!}
        {{ Form::textarea('comment',null,['class' => 'form-control', 'rows' => 6 ,'maxlength' =>'500']) }}<br>
    </div>

    <div >
        {!! Form::submit('登録', ['class' => 'btn btn-lg btn-danger']) !!}
    </div>
{!! Form::close() !!}
 </div>

</body>
</html>
