<!DOCTYPE html>
<html>
<head>
	<title>Update Posts</title>
	<meta charset="utf-8">
</head>
<body>

<div class="col-md-4 add">
	<form action="?controller=posts&action=postUpdate" method="post">
	  	<div class="form-group">
	  		<input type="hidden"  name="id" value="<?php echo $post['id']; ?>" />
	    	<label >First Name</label>
	  		<input type="text" name="firstname" value="<?php echo $post['first_name']; ?>" class="form-control" ><br>
	  	</div>
	 	<div class="form-group">
		    <label >Last Name</label>
		    <input type="text" name="lastname" value="<?php echo $post['last_name']; ?>"  class="form-control"><br>
	  	</div>
	  	<div class="form-group">
		    <label >Author</label>
		    <input type="text" name="author" value="<?php echo $post['author']; ?>" class="form-control"><br>
	  	</div>
	  	<div class="form-group">
		    <label >Content</label>
		   <input type="text" name="content" value="<?php echo $post['content']; ?>" class="form-control"><br>
	  	</div>
	  	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
	
</div>
<style type="text/css">
	.add{
		margin: 30px;
		border: 1px solid red; 
		padding: 10px;
		font-size: 13px;
	}
</style>
</body>
</html>