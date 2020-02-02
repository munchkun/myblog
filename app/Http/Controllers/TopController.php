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
  public function blog()
  {

    $blogs=Blog::all();

    return view('contents/blog',['blogs'=>$blogs]);
  }
  public function blogresearcher()
  {

    $blogs=Blog::where('blog_type_id',1)->get();

    return view('contents/blogs/researchercolumn',['blogs'=>$blogs]);
  }

  public function blogmugi()
  {

    $blogs=Blog::where('blog_type_id',2)->get();


    return view('contents/blogs/mugicolumn',['blogs'=>$blogs]);
  }
}
