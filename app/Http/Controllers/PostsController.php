<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\EditRequest;

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
      ->orderBy('id','arc')
      ->paginate(10);

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


      public function postAdd(PostRequest $request)
      {
        $data = Request::all();
        $this->post->fill($data);
        $this->post->save();
        return redirect()->to('post');
      }

      public function getDelete($id)
{
    $post = $this->post->find($id);
    $post->delete();
    return redirect()->to('post');
  }

  // 編集
  public function getEdit($id)
  {
      $post = $this->post->find($id);
      return view('post.edit', compact('post'));
  }

  public function postEdit($id, EditRequest $request)
  {
      $post = $this->post->find($id);
      $data = Request::all();
      $post->fill($data);
      $post->save();
      return redirect()->to('post');
  }

}
