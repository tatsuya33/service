<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use Request;

class GmapsController extends Controller
{
  /**
* Google Map 画面表示機能
*/
public function view()
{
  // データーベースなどから表示したい住所を取得。
  $post = "a";

  // 取得した住所を利用して、画面（ビュー）を作成
  return view('gmaps/view', compact('post'));
}

}
