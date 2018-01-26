<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use Request;

class PostsController extends Controller
{
  protected $post;

public function __construct(Post $post)
{
  $this->post = $post;
}

//一覧
public function getIndex()
{
  // 検索するテキスト取得
  $ramen_name = Request::get('ramen_name');
  $address = Request::get('address');
  $kind = Request::get('kind');
  $query = Post::query();
  // 検索するテキストが入力されている場合のみ
  if(!empty($ramen_name)) {
      $query->where('ramen_name', 'like', '%'.$ramen_name.'%');
  }
  if(!empty($address)) {
      $query->where('address', 'like', '%'.$address.'%');
  }
  if(!empty($address)) {
      $query->where('kind', 'like', '%'.$kind.'%');
  }
  $posts = $query
      ->get();

  return view('post.index', compact('posts', 'ramen_name', 'address','kind' ));
}

    // 詳細
    public function getDetail($id)
    {
        $post = $this->post->find($id);
        return view('post.detail', compact('post'));
    }
    // 投稿
      public function getAdd()
    {
      return view('post.add');
    }

    /**
    * 完了画面
    *
    * @return string
    */

      public function postAdd()
      {
        $data = Request::all();
        $this->post->fill($data);
        $this->post->save();
        return redirect()->to('post');
      }


}