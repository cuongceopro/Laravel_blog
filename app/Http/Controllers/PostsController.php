<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
//use Request;
use Illuminate\Http\Request;
use Redirect;

use App\Post;
use Validator;
use Input;

class PostsController extends BaseController
{
  public function bcc()
  {
    $posts = Post::all();
    return View::make('index')->with('posts', $posts);
    //return view('welcome');
  }

  public function detail($id)
  {
    $post = Post::find($id);
    return View::make('detail')->with('post', $post);
    //return "OK";
  }

  public function create()
  {
    $post = Post::all();
    return View::make('create0')->with('post', $post);
    //return "OK";

  }

  public function store(Request $request)
  {

    $rules = [
      'title' => 'required',
      'content'=>'required',
      'cat_id' => 'required'
    ];

    $messages = array(
      'title.required' => 'タイトルを正しく入力してください。',
      'content.required' => '本文を正しく入力してください。',
      'cat_id.required' => 'カテゴリーを選択してください。',
    );

    if ($request->file('file') != null) {
      $filename = $request->file('file')->store('public/detail');
    } else {
      $filename = '/vjshare/images/banners/sample1.jpg';
    }

    if ($request->file('file1') != null) {
      $filename1 = $request->file('file1')->store('public/detail');
    } else {
      $filename1 = '';
    }

    if ($request->file('file2') != null) {
      $filename2 = $request->file('file2')->store('public/detail');
    } else {
      $filename2 = '';
    }

    if ($request->file('file3') != null) {
      $filename3 = $request->file('file3')->store('public/detail');
    } else {
      $filename3 = '';
    }

    if ($request->file('file4') != null) {
      $filename4 = $request->file('file4')->store('public/detail');
    } else {
      $filename4 = '';
    }

    if ($request->file('file5') != null) {
      $filename5 = $request->file('file5')->store('public/detail');
    } else {
      $filename5 = '';
    }

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->passes()) {
      $post = new Post;
      $post->title = $request->input('title');
      $post->content = $request->input('content');
      $post->content_summary = $request->input('content_summary');
      $post->cat_id = $request->input('cat_id');
      $post->author = $request->input('author');
      $post->comment_count = 0;
      $post->summary_image = $filename;
      $post->view_count = 0;
      $post->image1 = $filename1;
      $post->image2 = $filename2;
      $post->image3 = $filename3;
      $post->image4 = $filename4;
      $post->image5 = $filename5;
      $post->save();
      return Redirect::back()
      ->with('message', '投稿が完了しました。');
    }else{
      return Redirect::back()
      ->withErrors($validator)
      ->withInput();
    }
  }

  public function showCategory($id)
  {
    $category_posts = Post::where('cat_id', $id)->get();

    return View::make('category')
    ->with('category_posts', $category_posts);
  }

  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
