<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Member;
use App\Blog;
use App\Donation;

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
  public function columndetail($id)
  {

    $blog=Blog::find($id);


    return view('contents/blogs/column_detail',['blog'=>$blog]);
  }
  public function donation(Request $request)
  {

    $request->email;

    \Payjp\Payjp::setApiKey('sk_test_8ba498ba2b046920f6b07ac8');
    $charge = \Payjp\Charge::create(array(
      'card' => $request->all()["payjp-token"],
      'amount' => $request->donation_money,
      'currency' => 'jpy'
    ));
    $donation = new Donation;
    $donation->name=$request->name;
    $donation->email=$request->email;
    $donation->donation_money=$request->donation_money;
    $donation->save();

    return view('contents/thanks');
  }

}
