<?php

namespace App;

use App\Comment;
use App\Reply;
use App\Post;
use App\User;
use Carbon\Carbon;



class Comment extends Model
{      

   public function post()
   {
   		return $this->belongsTo(Post::class);
   }
   
   public function user()
   {

     return $this->belongsTo(User::class);

   }
   
     public function comments()
   {

     return $this->hasMany(comment::class);

   }
    public function addcomment($body) 
    {
      
    	$this->comments()->create(compact('body'));
      return back();
    }
   public function addPost($body) 
    {
      
      $this->posts()->create(compact('body'));
      return back();
    }

}