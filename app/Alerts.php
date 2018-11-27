<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{
  public function user() {
     return $this->belongsTo('\App\User');
 }

 public function contacts() {
       return $this->belongsToMany('\App\Contacts');
     }

}
