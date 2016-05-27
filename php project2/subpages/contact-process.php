<?php

$name = @$_POST['name'];
$email = @$_POST['email'];
$message = @$_POST['comment'];

include('contact-database.php');

$result = mysql_query('SELECT * FROM ContactTable');
$emailCount = "SELECT count(email) FROM ContactTable WHERE email='$email'";
$emailresult = mysql_result(mysql_query($emailCount),0);


	if ($emailresult > 0){
		        header('Location: contactfailed.php');
	}else{
		$query = 'INSERT INTO ContactTable (Name, Email, Message) VALUES ("' . $name . '", "' . $email . '", "' . $message . '")';
		mysql_query($query);
        header('Location: contactdone.php');
	}

mysql_close($link);
exit;
?>