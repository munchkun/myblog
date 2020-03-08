<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function blogresearcher()
     {

       $blogs=Blog::where('blog_type_id',1)->get();

       return view('contents/blogs/researchercolumn',['blogs'=>$blogs]);
     }

     public function logout()
     {
       Auth::logout();
      return redirect('/');
     }

    public function index()
    {
        return view('home');
    }
}
