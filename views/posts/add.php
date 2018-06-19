<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
		form{
			width: 70%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<form action="?controller=posts&action=doAdd" method="POST" role="form">
		<legend>ADD</legend>
		<div class="form-group">
			<label for="firstname">First name</label><br></br>
			<input type="text" name = "firstname"  class="form-group" id="" placeholder="Input field"><br></br>

			<label for="lastname">Last name</label><br></br>
			<input type="text" name = "lastname"  class="form-group" id="" placeholder="Input field"><br></br>

			<label for="author">Author</label><br></br>
			<input type="text" name="author" class="form-group" id="" placeholder="input field"><br></br>

			<label for="content">Content</label><br></br>
			<input type="text" name = "content" class="form-group" id="" placeholder="Input field"><br></br>
			
		</div>
		<button type="submit" class="btn btn-primary">Add</button>
	</form>
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>