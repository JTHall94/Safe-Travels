<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
  public function user() {
     return $this->belongsTo('\App\User');
 }
 public function alerts() {
       return $this->belongsToMany('\App\Alerts');
     }
}
