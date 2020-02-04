@extends("layout")
<center><h1 style="color: #fff;margin-top: 7%">Add Post</h1></center>
<div class="div-class">
		<div class="flex flex-3">
  		<form method="post" action="/posts">
  			@csrf
		  	<div class="field">
		    	<label for="title" class="label">Title</label>
		    	<input name="title" type="text" class="input" value="{{old('title')}}" >
		    	<small class="is-danger">{{$errors->first('title')}}</small>
		   	</div>
  			<div class="form-group">
    			<label for="description" class="label">Description</label>
    			<input type="textarea" class="input" name="description" value="{{old('description')}}">
    			<small class="is-danger">{{$errors->first('description')}}</small>
  			</div>
			<button type="submit" class="button-btn">Submit</button>
		</form>
	</div>
</div>
