<!DOCTYPE html>
<html>
<head>
	<title>Add Posts</title>
	<meta charset="utf-8">
</head>
<body>

<div class="col-md-4 add">
	<form action="?controller=posts&action=doAdd" method="post">
	  	<div class="form-group">
	    	<label >First Name</label>
	  		<input type="text" name="firstname" class="form-control" ><br>
	  	</div>
	 	<div class="form-group">
		    <label >Last Name</label>
		    <input type="text" name="lastname" class="form-control"><br>
	  	</div>
	  	<div class="form-group">
		    <label >Author</label>
		    <input type="text" name="author" class="form-control"><br>
	  	</div>
	  	<div class="form-group">
		    <label >Content</label>
		   <input type="text" name="content" class="form-control"><br>
	  	</div>
	  	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
	
</div>

<?php 
// if (isset($_POST['submit'])) {
// 	echo $firstname = $_POST['firstname'];
// 	echo $lastname =$_POST['lastname'];
// 	echo $author = $_POST['author'];
// 	echo $content = $_POST['content'];

// }
 ?>

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