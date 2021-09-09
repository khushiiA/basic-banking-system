<?php
error_reporting(0);
define('DB_USER', 'id17558964_bank');
define('DB_PASSWORD', 'LN0Q?!]N<bJ0\e#3');
define('DB_HOST', 'localhost');
define('DB_NAME', 'id17558964_sql');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to the database'.mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');
?>