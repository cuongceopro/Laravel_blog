<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Intervention\Image\Facades\Image;


class UploadController extends Controller {

    public function index(Request $request)
    {
        return view('uploads');
    }
    public function store(Request $request)
    {
      $this->validate($request, [
          'file' => [
              // 必須
              'required',
              // アップロードされたファイルであること
              'file',
              // 最小縦横120px 最大縦横400px
              //'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
          ]
      ]);

      if ($request->file('file')->isValid([])) {
          $filename = $request->file('file')->store('public/avatar');

          // $user = User::find(auth()->id());
          // $user->avatar_filename = basename($filename);
          // $user->save();

          //return redirect('/image')->with('success', '保存しました。');
       } else {
          return redirect()
              ->back()
              ->withInput()
              ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
      }

      if ($request->file('file1')->isValid([])) {
          $filename = $request->file('file1')->store('public/avatar');

          // $user = User::find(auth()->id());
          // $user->avatar_filename = basename($filename);
          // $user->save();

          //return redirect('/image')->with('success', '保存しました。');
       } else {
          return redirect()
              ->back()
              ->withInput()
              ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
      }

      return redirect('/image')->with('success', '保存しました。');

    }
}
