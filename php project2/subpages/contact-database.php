<?php
$server = 'localhost';
    $user = 'cavalheiroe';
    $pass = 'scarySeal';
    $database = 'cavalheiroe';

    $link = mysql_connect($server,$user,$pass);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    
    echo 'Connected successfully<br/><br/>';

    mysql_select_db($database, $link) or die('Could not select database.');

    echo 'Database connected succesfully<br/><br/>';
    ?>