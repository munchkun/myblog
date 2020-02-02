<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  public function path()
  {

      return '/column_detail/'.$this->id;
  }
}
