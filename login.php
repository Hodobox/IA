<?php

$link = mysql_connect('localhost', 'admin', 'admin');

 mysql_select_db ( 'sach', $link);
$x = $_POST['username'];
$sql = "SELECT * FROM admins WHERE usn = '$x'";

$result = mysql_query($sql) or die("Error in query $sql " . mysql_error());
$correct_login = false;

while($row = mysql_fetch_array($result))
{
	if($row['pass'] == $_POST['password']) $correct_login = true;
}

if($correct_login)
{
	echo "Success.";
}
else
{
	echo "Wrong username or password.";
}

?>