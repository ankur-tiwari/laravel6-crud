<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Model\Post;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::latest()->get();	
    	return view("post.index", ['posts' => $posts]);
	}

	//to show create post view
	public function create()
	{
		return view("post.create");
	}

	//to store a post
	public function store()
	{
		Post::create($this->validatePost());
		return redirect("posts.index");
	}

	public function edit(Post $post)
	{
		return view("post.edit", compact("post", $post));
	}

	public function update(Post $post)
	{
		$post->update($this->validatePost());

		return redirect("posts.index");
	}

	public function show(Post $post)
    {
    	return view("post.show", compact("post", $post));
    }

    protected function validatePost()
    {
    	return request()->validate([
			'title' => 'required',
		    'description' => 'required'
		]);
    }
}
