<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestUsers extends Model
{
  protected $connections = 'deployment';
  protected $table = 'users';
  protected $fillable = [
    'name', 'age'
  ];
  // public $time
}
