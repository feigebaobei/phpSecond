<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class Data extends Authenticatable
class Data extends Model
{
  // use Notifiable;
    //
  protected $connections = 'deployment';
  // protected $connections = 'gwadmin';
  protected $table = 'students';
  protected $fillable = [
    'name', 'age'
  ];
  public $timestamps = false; // 数据库里没有creat_at/update_at时使用这行。
  // protected $connection = 'mysql_queue';
    
  //   protected $table = 'xes_queue_vhost';

  //   protected $fillable = [
  //       'id','app_id', 'app_name', 'v_name', 'v_status', 'v_desc', 'cluster_id'
  //   ];
}
