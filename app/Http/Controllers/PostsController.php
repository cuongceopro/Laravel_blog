<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostsController extends BaseController
{
    public function bcc()
    {
      return view('welcome');
    }

    public function getDetail()
    {
      return view('detail');
    }

    public function getSub(){
      return view('sub');
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
