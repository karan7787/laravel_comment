<?php

namespace App;

use App\Comment;
use App\Post;
use App\User;
use Carbon\Carbon;


class Post extends Model
{
   
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body) 
    {
      
    	$this->comments()->create(compact('body'));
      return back();
    }
  

    public function scopeFilter($query, $filters)
    {

       
    if($month = $filters ['month'])
    {
     
     $query->whereMonth('created_at', Carbon::parse($month)->month);
    }
    

    if($year = $filters['year']) 
    {
     
     $query->whereYear('created_at', $year);
     }


   }


   public static function archives()
   {

    return static::selectRaw('year(created_at)year, monthname(created_at)month, COUNT(*)published')

    ->groupBy('year','month')
     
    ->orderByRaw('min(created_at)')    
    
    ->get()->toArray(); 


   }


   public function tags()
   {
       // any may have many tags  
       return $this->belongsToMany(Tag::class);

       // any tag may be applied to many posts

   }


}
