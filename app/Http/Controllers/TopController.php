<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Member;
use App\Blog;

class TopController extends Controller
{
  public function index()
  {

    $members = Member::all();

    return view('contents/index',['members'=>$members]);
  }
  
  public function resercherblog()
  {

    $blogs=Blog::all();

    return view('contents/blogs/column',['blogs'=>$blogs]);
  }
}
