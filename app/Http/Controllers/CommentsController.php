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
use App\Comment;
use Validator;
use Input;

class CommentsController extends BaseController
{
  public function store()
{
	$rules = [
		'commenter' => 'required',
		'comment'=>'required',
	];

	$messages = array(
		'commenter.required' => 'タイトルを正しく入力してください。',
		'comment.required' => '本文を正しく入力してください。',
	);

	$validator = Validator::make(Request::all(), $rules, $messages);

	if ($validator->passes()) {
		$comment = new Comment;
		$comment->commenter = Request::input('commenter');
		$comment->comment = Request::input('comment');
		$comment->post_id = Request::input('post_id');
		$comment->save();
		return Redirect::back()
			->with('message', '投稿が完了しました。');
	}else{
		return Redirect::back()
			->withErrors($validator)
			->withInput();
	}
}

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
