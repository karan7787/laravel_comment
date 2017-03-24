<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\Reply;
use Carbon\Carbon;

class PostsController extends Controller
{

	public function __construct()
    {
      // $posts=Post::latest()
       
       //->filter(request(['month','year']))
       
       //->get();

    $this->middleware('auth')->except(['index','show']);

    }

	public function index()
	 {
       // dd($posts);

       
      // $posts = $post->all();
         
	   $posts = Post::latest()
	  
	  ->filter(request(['month','year']))
	  
	  ->get();

	
	return view('posts.index',compact('posts'));
		
	}

	public function create() {

		return view('posts.create');
	}

	public function store() {

		$this->validate(request(),[

			'title' => 'required',

			'body' => 'required'

			]);


		auth()->user()->publish(

			new Post(request(['title','body']))

			);

		session()->flash(

			'message','Your post has been now published'

			);


    	return redirect('/');
	//dd(request()->all());
	// $post = new Post;
	// $post -> title = request('title');
	// $post -> body = request('body');
	// $post -> save();

	}

	// public function show($id){
		// $post = Post::find($id);

	public function show(Post $post)
	{
		return view('posts.show',compact('post'));
	}

}
