<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\View;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->id());

        return view('create');
    }

    public function detail_test($id)
    {
      $post = Post::find($id);
      return View::make('detail_test')->with('post', $post);
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return View::make('edit')->with('post', $post);
    }

    public function waiting_accept()
    {
      $posts = Post::where('status', '1')->get();

      return View::make('waiting_accept')
      ->with('posts', $posts);
    }

  }
