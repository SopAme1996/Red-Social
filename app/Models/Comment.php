<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

      protected $table = "comments";

      //Relacion Many To One
      public function users(){
          return $this->belongsTo('App\Models\User', 'user_id');
      }

      public function images(){
          return $this->belongsTo('App\Models\Image', 'image_id');
      }
      
}
