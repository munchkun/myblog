<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class BlogController extends Controller
{
  public function index()
  {
    $data="test";
    return view('contents/blog',['data'=>$data]);
  }

}
