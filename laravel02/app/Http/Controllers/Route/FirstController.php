<?php

namespace App\Http\Controllers\Route;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FirstController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  public function index() {
    // return view('route.first', ['content' => 'content of page']);
    return view('welcome');
  }
}
