<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //


  $user = Auth::user();
    if(Gate::denies('delete',$this->post)){
      
      return redirect('/post');
    }
}
