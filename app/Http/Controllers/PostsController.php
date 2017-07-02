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

use Illuminate\View\Compilers\BladeCompiler;
use App\Post;
use Validator;
use Input;

class PostsController extends BaseController
{
  public function bcc()
  {
    $posts = Post::all();
    return View::make('index')->with('posts', $posts);
  }

  public function detail($id)
  {
    $post = Post::find($id);
    if($post->status != 0){
      return redirect("detail_test/$id");
    }
    else {
      return View::make('detail')->with('post', $post);
    }
  }

  public function create()
  {
    $post = Post::all();
    return View::make('create0')->with('post', $post);
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

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->passes()) {
      $post = new Post;
      $post->title = $request->input('title');

      $post_content = (View::make('post')->with('post', $request->input('content'))->render());

      $post->content = $post_content;

      $post->content_summary = $request->input('content_summary');
      $post->cat_id = $request->input('cat_id');
      $post->author = $request->input('author');
      $post->comment_count = 0;
      $post->view_count = 0;
      $post->status = 1;

      $folder_name = $request->input('folder');
      if ($request->file('file') != null) {
        $filename = $request->file('file')->store("public/detail/$post->title");
      } else {
        $filename = '/vjshare/images/banners/sample1.jpg';
      }
      $post->summary_image = basename($filename);


      if ($request->file('file1') != null) {
        $path = ''.$folder_name. '/' .($request->file('file1')->getClientOriginalName()).'';
        $filename1 = $request->file('file1')->storeAs('public/detail/',$path);
      } else {
        $filename1 = '';
      }
      $post->image1 = $filename1;

      if ($request->file('file2') != null) {
        $path = ''.$folder_name. '/' .($request->file('file2')->getClientOriginalName()).'';
        $filename2 = $request->file('file2')->storeAs('public/detail/',$path);
      } else {
        $filename2 = '';
      }
      $post->image2 = $filename2;

      if ($request->file('file3') != null) {
        $path = ''.$folder_name. '/' .($request->file('file3')->getClientOriginalName()).'';
        $filename3 = $request->file('file3')->storeAs('public/detail/',$path);
      } else {
        $filename3 = '';
      }
      $post->image3 = $filename3;

      if ($request->file('file4') != null) {
        $path = ''.$folder_name. '/' .($request->file('file4')->getClientOriginalName()).'';
        $filename4 = $request->file('file4')->storeAs('public/detail/',$path);
      } else {
        $filename4 = '';
      }
      $post->image4 = $filename4;

      if ($request->file('file5') != null) {
        $path = ''.$folder_name. '/' .($request->file('file5')->getClientOriginalName()).'';
        $filename5 = $request->file('file5')->storeAs('public/detail/',$path);
      } else {
        $filename5 = '';
      }
      $post->image5 = $filename5;

      $post->save();

      return redirect("detail_test/$post->id");
    }else{
      return Redirect::back()
      ->withErrors($validator)
      ->withInput();
    }
  }

  public function update(Request $request, $id)
  {

    $post = Post::find($id);

    $post->status = 1;
    if($post->title != $request->input('title')){
      $post->title = $request->input('title');
    }
    if($post->content != $request->input('content')){
      $post->content = $request->input('content');
    }
    if($post->content_summary != $request->input('content_summary')){
      $post->content_summary = $request->input('content_summary');
    }
    if($post->cat_is != $request->input('cat_id')){
      $post->cat_id = $request->input('cat_id');
    }
    if($post->author != $request->input('author')){
      $post->author = $request->input('author');
    }

    if ($request->file('file') != null) {
      $filename = $request->file('file')->store("public/detail/$post->title");
      $post->summary_image = basename($filename);
    }

    if ($request->file('file1') != null) {
      $path = ''.$folder_name. '/' .($request->file('file1')->getClientOriginalName()).'';
      $filename1 = $request->file('file1')->storeAs('public/detail/',$path);
      $post->image1 = $filename1;
    }

    if ($request->file('file2') != null) {
      $path = ''.$folder_name. '/' .($request->file('file2')->getClientOriginalName()).'';
      $filename2 = $request->file('file2')->storeAs('public/detail/',$path);
      $post->image2 = $filename2;
    }

    if ($request->file('file3') != null) {
      $path = ''.$folder_name. '/' .($request->file('file3')->getClientOriginalName()).'';
      $filename3 = $request->file('file3')->storeAs('public/detail/',$path);
      $post->image3 = $filename3;
    }

    if ($request->file('file4') != null) {
      $path = ''.$folder_name. '/' .($request->file('file4')->getClientOriginalName()).'';
      $filename4 = $request->file('file4')->storeAs('public/detail/',$path);
      $post->image4 = $filename4;
    }

    if ($request->file('file5') != null) {
      $path = ''.$folder_name. '/' .($request->file('file5')->getClientOriginalName()).'';
      $filename5 = $request->file('file5')->storeAs('public/detail/',$path);
      $post->image5 = $filename5;
    }

    $post->save();

    return redirect("detail_test/$post->id");

  }


  public function accept($id)
  {

    $post = Post::find($id);
    $post->status = 0;
    $post->save();

    return redirect("/detail/$id");

  }

  public function showCategory($id)
  {
    $category_posts = Post::where('cat_id', $id)->get();

    return View::make('category')
    ->with('category_posts', $category_posts);
  }

  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
