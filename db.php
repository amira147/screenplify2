<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'its4400';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$database="screenplify_blog";
mysql_select_db($database);
?> 
