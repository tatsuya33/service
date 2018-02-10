<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    //
    public function store(Request $request, $postId) {
      $this->validate($request, [
        'body' => 'required'
      ]);

      $comment = new Comment(['body' => $request->body]);
      $post = Post::findOrFail($postId);
      $post = 
      $post->comments()->save($comment);

      return redirect()
             ->action('PostsController@getIndex', $post->id);
    }



}
