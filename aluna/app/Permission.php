<?php

namespace App;


use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
  protected $table = 'permissions';
  protected $fillable = ['name', 'display_name', 'description'];


  public function role(){
    return $this->belongsToMany('App\Role');
  }


}
