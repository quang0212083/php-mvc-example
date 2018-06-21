<!DOCTYPE html>
<html>
<head>
	<title>Them du lieu</title>
</head>
<body>
    <br /> <br />
<form action="?controller=posts&action=doAdd" method="post">
	<table>
    <tr>
        <th> first_name:</th> 
        <td> <input type="text" name="first_name" value=""> </td>
    </tr>
    <tr>
        <th> last_name: </th> <td> <input type="text" name="last_name" value="" /> </td>
    </tr>
    <tr>
        <th> author: </th> <td> <input type="text" name="author" value="" /> </td>
    </tr>
    <tr>
        <th> content: </th> <td> <input type="text" name="content" value="" /> </td>
    </tr>
    
    </table>
    <input type="submit" name="submit" value="add">
</form>
</body>
</html>