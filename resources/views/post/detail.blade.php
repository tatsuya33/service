
<!DOCTYPE html>
<html class="html">
<head>
<title>詳細</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class=" bg-warning">
  <nav class="navbar  navbartop">
    <ul class="nav navbar-nav navbar-left">
        <li><h1 class="h1 ">関東のラーメン屋 投稿フォーム</h1></li>
      </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
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
              </nav>

              @yield('content')
          </div>

          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}"></script>
<br>
<br>
<br>
<div class="col-md-6 col-md-offset-3 container" >
    <div class="h3">ラーメン屋の名前：：{{{ $post->ramen_name}}}</div>
    <div class="h3">住所：：{{{ $post->address }}}</div>
    <div class="h3">ラーメンの種類：：{{{ $post->kind }}}</div>
    <div class="h3">値段：：{{{ $post->price }}}円</div>
    <div class="h3">コメント：：{{{ $post->comment }}}</div>
    <div class="h3">投稿日：：{{ date("Y年 m月 d日 H時i分s秒",strtotime($post->created_at)) }}</div>
</div>

    @if(Auth::check())
      <hr>
        <h2 class="col-md-6 col-md-offset-3 container">コメントの投稿</h2>
          <form method="post" action="{{ action('CommentsController@store', $post->id) }}">
            {{ csrf_field() }}
              <p class="col-md-6 col-md-offset-3 container">
                <input type="text" name="body" placeholder="" value="{{ old('body') }}">
                  @if ($errors->has('body'))
                    <span class="error">{{ $errors->first('body') }}</span>
                  @endif
                </p>
                  <p class="col-md-6 col-md-offset-3 container">
                    <input type="submit" value="コメントの投稿">
                  </p>
              </form>
    @else
          <h2 class="col-md-6 col-md-offset-3 container">コメントの投稿</h2>
            <p class="col-md-6 col-md-offset-3 h4 container">
              ログインしてください
            </p>
    @endif


<h2 class="col-md-6 col-md-offset-3 container">コメントの表示</h2>
<ul class="col-md-6 col-md-offset-3 h4 container">
  <p>
  <table border>
  <tr>@forelse ($post->comments as $comment)
  {{ $comment->body }}
  </tr>
</table>
</p>

  @empty
  <p class="">
  コメントがありません
  </p>
  @endforelse

</ul>



</body>
</html>
