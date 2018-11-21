<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users() {
    return $this->hasMany('App\User');
  }

  public function rights() {
    return $this->belongsToMany('App\Right');
  }

  public function hasRight($right) {
    return $this->rights()->where('name', $right)->first() !== null;
  }

  public function hasAnyRight($rights) {
    return $this->rights()->whereIn('name', $rights)->first() !== null;
  }
}
