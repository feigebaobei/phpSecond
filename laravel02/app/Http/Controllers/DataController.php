<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    //
  public function index () {
    // $res = Data::where('age', 25)->get();
    // $res = 3;
    // $res = $res->toArray();
    // $res = ['kye' => $res];
    // dd($res);
    // dd(Data);
    // dd(3);
    // return view('data', [$res]);

    // $stats = DB::connection('deployment')->table('students')->select('age')->get();
    // dd($stats);

    $users = Data::all();
    // $users = Data::where('age', 25)->get();
    // $users = Data::where('name', 'lyy')->first();
    // dd($users);

    return view('data', ['key' => $users]);

  }


  public function addData(Request $request) {
    $age = $request->age;
    $name = $request->name;
    // dd($age);
    $users = new Data;
    $users->age = $age;
    dump($age);
    $users->name = $name;
    $users->save();
  }


  public function removeData(Request $request) {
    // $user = Data::find(1);
    $user = Data::where('name', 'lyy')->get();
    $user->delete();
  }
}
