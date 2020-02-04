@extends("layout")
<div id="wrapper">
	<div id="page" class="container">
		
			@foreach($posts as $post)
			<div id="content">
				<div class="title">
					<h2>{{$post->title}}</h2>
					<span class="byline">{{$post->description}}</span> 	
				</div>
				<a href="/posts/{{$post->id}}/edit">Edit</a>
				<a href="/posts/{{$post->id}}">More</a>
			</div>
			@endforeach
		
	</div>
</div>