<?php
$link = mysql_connect('localhost', 'ecbohler', 'p@$$w0rd');
if (!$link) {
die('Error: ' . mysql_error());
}
echo 'Database connection working!';
mysql_close($link);
?>

