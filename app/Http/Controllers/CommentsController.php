<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\User;
use App\Reply;


class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	
    	$post -> addComment(request('body'));

        

    	// Comment::create([
    	// 					'body' => request('body'),
    	// 					'post_id' => $post->id
    	// 	]);
    	return back();
    }
}
