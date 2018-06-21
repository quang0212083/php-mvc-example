<!DOCTYPE html>
<html>
<head>
	<title>Chinh sua du lieu</title>
</head>
<body>
    <br /> <br />
<form action="?controller=posts&action=update" method="post">
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
    <br /> <br />
    ID: <input type="text" name = "ID" value="">
    <input type="submit" name="submit" value="update">
</form>
</body>
</html>