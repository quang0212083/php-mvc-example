<form action="?controller=posts&action=doedit" method="post" >
	<input type="hidden" name="id" value="<?php echo $posts['id'] ?>">
	<p> firstname: <input type="text" name="firstname" value="<?php echo $posts['first_name'] ?>"></p>
	<p> lastname:   <input type="text" name="lastname" value="<?php echo $posts['last_name'] ?>" ></p>
	<p> author:       <input type="text" name="author" value="<?php echo $posts['author'] ?>"> </p>
	<p> content:     <input type="text" name="content" value="<?php echo $posts['content'] ?>"></p>
	<p> <input type="submit" name="edit" value="edit"> </p>
</form>
