<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use Request;
//use Illuminate\Http\Request;
use Redirect;

use App\Post;
use Validator;
use Input;
use Illuminate\Database\Eloquent\Model;

class Controller extends BaseController
{
    public function getBkk()
    {
      $posts = Post::all();
      return View::make('bkk')->with('posts', $posts);
      //return view('welcome');
    }

    public function getDetail()
    {
      return view('detail');
    }

    public function getSub($id){
      $category_posts_a = Post::latest('id');
      $category_posts = $category_posts_a->where('cat_id', $id)->paginate(10);

       return View::make('sub')
         ->with('category_posts', $category_posts);
    }

    public function getAboutus()
    {
      return view('aboutus');
    }

    public function getContact()
    {
      return view('contact');
    }

    public function getError()
    {
      return view('error');
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
