<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestUsers;

class TestUsersController extends Controller
{
  public function index () {
    $users = TestUsers::all();
    if (empty($users)) {
      return view('testUsers', ['users' => 'null']);
    }
    return view('testUsers', ['users' => $users]);
  }

  public function add (Request $request) {
    $users = new TestUsers;
    $users->name = $request->name;
    $users->age = $request->age;
    $users->save();
    // return
  }
}
