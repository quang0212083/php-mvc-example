<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
		form{
			width: 70%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	
	<form action="?controller=posts&action=exeUpdate" method="POST" role="form">
		<legend>Update</legend>
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
			<label for="firstname">First name</label><br></br>
			<input type="text" name = "firstname" value="<?php echo($post['first_name']) ?>" class="form-group" id="" placeholder="Input field"><br></br>

			<label for="lastname">Last name</label><br></br>
			<input type="text" name = "lastname" value="<?php echo($post['last_name']) ?>" class="form-group" id="" placeholder="Input field"><br></br>

			<label for="author">Author</label><br></br>
			<input type="text" name="author" value ="<?php echo($post['author']) ?>"class="form-group" id="" placeholder="input field"><br></br>

			<label for="content">Content</label><br></br>
			<input type="text" name = "content" value="<?php echo($post['content']) ?>" class="form-group" id="" placeholder="Input field"><br></br>
			
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>