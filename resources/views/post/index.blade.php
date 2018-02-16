
<!DOCTYPE html>
<html class="html">
<head>
<title>ラーメン</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style1.css">
</head>
<body class="">
<nav class="navbar navbar-inverse ">
  <ul class="nav navbar-nav navbar-left">
      <li><h1 class="h1">関東のラーメン屋 投稿フォーム</h1></li>

    </ul>
                      <!-- Right Side Of Navbar -->
                      <ul class="nav navbar-nav pull-right">
                          <!-- Authentication Links -->
                          @guest
                              <li class="h4"><a href="{{ route('login') }}">ログイン</a></li>
                              <li class="h4"><a href="{{ route('register') }}">新規登録</a></li>
                          @else
                              <li class="dropdown h3">

                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li>
                                          <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                              ログアウト
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          @endguest
                      </ul>
                  </div>
              </div>
              <form class="navbar-form navbar-left "  role="search">
                <br>
                <br>
                <br>
              <br>
            <div class= 'h4 '>
            {!! Form::open(['method' => 'GET']) !!}
                {!! Form::text('ramen_name', $ramen_name,[' placeholder' => 'ラーメン屋の名前']) !!}
                {!! Form::text('address', $address,[' placeholder' => '詳しい住所']) !!}
                {!! Form::text('kind', $kind,[' placeholder' => '種類']) !!}
                {!! Form::submit('検索', ['class' => 'btn btn-lg btn-danger'])!!}
            {!! Form::close() !!}
            </div>
            </form>
            <br>
            <br>
            <br>
          <br>
           @if(Auth::check())
              <div class="pull-right h2 "><a href="/post/add">投稿</a></div>
          @else
          @endif
          </nav>

          @yield('content')
      </div>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>


<br>

<p class="containe ">

@foreach($posts as $post)
    <div class="container">
              <div class="h2 pull-right">投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</div>
    <div class="h2 bg-warning">ラーメン屋の名前：：{{{ $post->ramen_name}}} </div>
    <div class="h4">ラーメンの種類：：{{{ $post->kind }}}</div>
      <div class="h4">値段：：{{{ $post->price }}}円</div>
        <div class="h4 pull-right"><a href="/post/detail/{{{ $post->id }}}">詳細</a></div>
        <div class="h4">コメント：：{{{ $post->comment }}}</div>
<hr>

</div>
@endforeach
    <div class="pager">
        @foreach ($posts as $post)
            {{ $post->name }}
        @endforeach
    </div>
<div class="container page">
{{ $posts->links() }}
</div>
</body>
</html>
