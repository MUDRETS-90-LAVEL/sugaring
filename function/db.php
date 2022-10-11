

<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'mytest';

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
($link) or die(mysqli_error($link));

?>